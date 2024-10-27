<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Http\Requests\StoreAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdvertisementController extends Controller
{
    const PATH_VIEW = 'admin.advertisements.';
    const PATH_UPLOAD = 'images/advertisements';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertisements = Advertisement::latest('id')->paginate(10);

        return view(self::PATH_VIEW . __FUNCTION__, compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdvertisementRequest $request)
    {
        try {
            $data = $request->validated();
            
            if ($data['pages'] != 'home' && $data['position'] == 'header') {
                return back()->withInput()->with('error', 'Không hiển thị quảng cáo nào cho vị trí này ngoài trang chủ.');
            }

            if ($this->checkDuplicateAdvertisement($data['pages'], $data['position'], $data['start_date'], $data['end_date'])) {
                return back()->withInput()->with('error', 'Đẫ có quảng cáo tồn tại trong khoảng thời gian và trang này.');
            }

            if ($request->hasFile('image')) {
                $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
            }

            Advertisement::create($data);

            return redirect()->route('admin.advertisements.index')->with('success', 'Thêm quảng cáo thành công.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            
            if (isset($data['image']) && Storage::exists($data['image'])) {
                Storage::delete($data['image']);
            }

            return back()->with('error', 'Thêm quảng cáo thất bại, vui lòng thử lại.');
        }
    }

    public function show($id)
    {
        $advertisement = Advertisement::find($id);

        if (empty($advertisement)) {
            return back()->with('error', 'Không tìm thấy quảng cáo.');
        }

        return view(self::PATH_VIEW . __FUNCTION__, compact('advertisement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $advertisement = Advertisement::find($id);

        if (empty($advertisement)) {
            return back()->with('error', 'Không tìm thấy quảng cáo.');
        }

        return view(self::PATH_VIEW . __FUNCTION__, compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdvertisementRequest $request, $id)
    {
        try {
            $advertisement = Advertisement::find($id);

            if (empty($advertisement)) {
                return back()->with('error', 'Không tìm thấy quảng cáo.');
            }

            $data = $request->validated();

            if ($data['pages'] != 'home' && $data['position'] == 'header') {
                return back()->withInput()->with('error', 'Không hiển thị quảng cáo nào cho vị trí này ngoài trang chủ.');
            }
            
            if ($this->checkDuplicateAdvertisement($data['pages'], $data['position'], $data['start_date'], $data['end_date'], $advertisement->id)) {
                return back()->withInput()->with('error', 'Đẫ có quảng cáo tồn tại trong khoảng thời gian và vị trí này.');
            }

            $oldImage = $advertisement->image;

            if ($request->hasFile('image')) {
                $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));

                if ($oldImage && Storage::exists($oldImage)) {
                    Storage::delete($oldImage);
                }
            }

            $advertisement->update($data);

            return back()->with('success', 'Cập nhật quảng cáo thành công.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            if (isset($data['image']) && Storage::exists($data['image'])) {
                Storage::delete($data['image']);
            }
            return back()->with('error', 'Cập quảng cáo thất bại, vui lòng thử lại.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $advertisement = Advertisement::find($id);

            if (empty($advertisement)) {
                return back()->with('error', 'Không tìm thấy quảng cáo.');
            }

            if ($advertisement->status === 'active') {
                return back()->with('error', 'Không thể xóa quảng cáo đang chạy.');
            }
            $advertisement->delete();

            return back()->with('success', 'Xóa quảng cáo thành công.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            
            return back()->with('error', 'Xóa quảng cáo thất bại, vui lòng thử lại.');
        }
    }

    public function trashed() 
    {
        try {
            $trashedAdvertisements = Advertisement::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(10);
        
            return view(self::PATH_VIEW . __FUNCTION__, compact('trashedAdvertisements'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return back()->with('error', 'Lấy danh sách quảng cáo đã xóa thất bại, vui lòng thử lại.');
        }
    }

    public function restore ($id) 
    {
        try {
            $advertisement = Advertisement::withTrashed()->find($id);

            if (empty($advertisement)) {
                return back()->with('error', 'Không tìm thấy quảng cáo.');
            }

            $advertisement->restore();

            return back()->with('success', 'Khôi phục quảng cáo thành công.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            
            return back()->with('error', 'Không thể khôi phục quảng cáo, vui lòng thử lại.');
        }
    }

    public function forceDelete ($id) 
    {
        try {
            $advertisement = Advertisement::withTrashed()->find($id);

            if (empty($advertisement)) {
                return back()->with('error', 'Không tìm thấy quảng cáo.');
            }

            $advertisement->forceDelete();
            
            if ($advertisement->image && Storage::exists($advertisement->image)) {
                Storage::delete($advertisement->image); 
            }
            
            return back()->with('success', 'Xóa quảng cáo vĩnh viễn thành công.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return back()->with('error', 'Không thể xóa quảng cáo, vui lòng thử lại.');
        }
    }
    
    private function checkDuplicateAdvertisement($pages, $position, $startDate, $endDate, $currentId = null)
    {
        return Advertisement::where('pages', $pages)->where('position', $position)
            ->where(function($query) use ($startDate, $endDate) {
                $query->whereBetween('start_date', [$startDate, $endDate])
                    ->orWhereBetween('end_date', [$startDate, $endDate])
                    ->orWhere(function($query) use ($startDate, $endDate) {
                        $query->where('start_date', '<=', $startDate)
                            ->where('end_date', '>=', $endDate);
                    });
            })
            ->when($currentId, function($query) use ($currentId) {
                return $query->where('id', '!=', $currentId);
            })
            ->exists();
    }
}