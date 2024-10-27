<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_active', true)->get();

        return view('home', compact('categories'));
    }

    public function categories()
    {
        $categories = Category::where('is_active', true)->get();

        return $categories;
    }

    public function findPostByCategory($slug)
    {
        $category = Category::where('slug', $slug)->posts()->latest('id')->paginate(20);

        return view('category', compact('category'));
    }

    public function advertisement()
    {
        $now = Carbon::now()->toDateTimeString(); 

        $advertisement = Advertisement::where('status', 'active')
            ->whereDate('start_date', '<=', $now) 
            ->whereDate('end_date', '>=', $now)    
            ->get();
    
        return $advertisement;
    }

    public function faqs()
    {
        $faqs = Faq::latest('id')->paginate(10);

        return view('clients.faq', compact('faqs'));
    }

    public function submitContact(Request $request)
    {
        $data = $request->validate(
            [
                'name'    => 'required|string|max:255',
                'email'   => 'required|email|max:255',
                'title'   => 'required|string|max:255',
                'content' => 'required|string',
            ],
            [
                'name.required'     => 'Vui lòng nhập tên của bạn.',
                'name.string'       => 'Tên của bạn phải là chuỗi.',
                'name.max'          => 'Tên của bạn không được vượt quá 255 ký tự.',
                'email.required'    => 'Vui lòng nhập email của bạn.',
                'email.email'       => 'Email của bạn không đúng định dạng.',
                'email.max'         => 'Email của bạn không được vượt quá 255 ký tự.',
                'title.required'    => 'Vui lòng nhập tiêu đề tin nhắn.',
                'title.string'      => 'Tiêu đề tin nhắn phải là chuỗi.',
                'title.max'         => 'Tiêu đề tin nhắn không được vượt quá 255 ký tự.',
                'content.required'  => 'Vui lòng nhập nội dung tin nhắn.',
                'content.string'    => 'Nội dung tin nhắn phải là chuỗi.',
            ]
        );

        Contact::create($data);

        return view('clients.contact')->with('success', 'Gửi liên hệ thành công.');
    }
}