<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($timeframe = null)
    {
        if ($timeframe != null) {
            switch ($timeframe) {
                case 'today':
                    $posts = Post::whereDate('created_at', Carbon::today())
                        ->orderBy('created_at', 'desc')
                        ->limit(10)
                        ->get();
                    if ($posts->count() == 0) {
                        redirect()->back()->with('message', 'Chưa có bài viết nào được tạo trong ngày hôm nay.');
                        break;
                    }
                    break;

                case 'week':
                    $posts = Post::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()])
                        ->orderBy('created_at', 'desc')
                        ->limit(10)
                        ->get();
                    if ($posts->count() == 0) {
                        redirect()->back()->with('message', 'Chưa có bài viết nào được tạo trong tuần này.');
                    }
                    break;

                case 'month':
                    $posts = Post::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()])
                        ->orderBy('created_at', 'desc')
                        ->limit(10)
                        ->get();
                    if ($posts->count() == 0) {
                        redirect()->back()->with('message', 'Chưa có bài viết nào được tạo trong tháng này.');
                    }
                    break;

                case 'year':
                    $posts = Post::whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()])
                        ->orderBy('created_at', 'desc')
                        ->limit(10)
                        ->get();
                    if ($posts->count() == 0) {
                        redirect()->back()->with('message', 'Chưa có bài viết nào được tạo trong năm nay.');
                    }
                    break;

                default:
                    $posts = Post::where('created_at', Carbon::today())
                        ->orderBy('created_at', 'desc')
                        ->limit(10)
                        ->get();
                    if ($posts->count() == 0) {
                        redirect()->back()->with('message', 'Chưa có bài viết nào được tạo trong ngày hôm nay.');
                        break;
                    }
                    break;
            }
            return view('admin.dashboard', compact('posts'));
        }
        
        $postsToday = Post::whereDate('created_at', Carbon::today())
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return view('admin.dashboard', compact('postsToday'));
    }

}
