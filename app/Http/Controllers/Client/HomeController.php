<?php

namespace App\Http\Controllers\Client;

use Carbon\Carbon;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Category;
use App\Models\ReadHistory;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->toDateTimeString();
        $weekAgo = Carbon::now()->subWeek()->toDateTimeString();

        $latestPosts = Post::latest('id')->paginate(10);

        $trendingPosts = Post::whereBetween('created_at', [$weekAgo, $now])
            ->orderByDesc('view')
            ->paginate(10);

        $postsInWeek = Post::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()])
            ->orderBy('created_at', 'desc')
            ->limit(9)
            ->get();

        return view('clients.home', compact('latestPosts', 'trendingPosts', 'postsInWeek'));
    }

    public function contactPage()
    {
        return view('clients.contact');
    }

    public function categories()
    {
        $categories = Category::where('is_active', true)->get();

        return $categories;
    }

    public function findPostByCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $categoryPosts = $category->posts()->latest('id')->paginate(20);

        return view('clients.category', compact('category', 'categoryPosts'));
    }

    // public function postDetail($slug)
    // {
    //     $post = Post::where('slug', $slug)->firstOrFail();

    //     $relatedPosts = Post::where('category_id', $post->category_id)
    //         ->where('id', '!=', $post->id)
    //         ->latest('id')
    //         ->limit(3)
    //         ->get();
    //         $post->increment('view');

    //         $comments = Comment::where('post_id', $post->id)->latest()->get();
    //         // dd($comments);
    //     return view('clients.post-detail', compact('post', 'relatedPosts','comments'));
    // }
    public function postDetail($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->latest('id')
            ->limit(3)
            ->get();
        $post->increment('view');
        // $comments = Comment::where('post_id', $post->id)->latest()->get();
        $comments = Comment::where('post_id', $post->id)->latest()->take(3)->get();

        if (Auth::check()) {
            $userId = Auth::id();
            $history = ReadHistory::where('user_id', $userId)
                ->where('post_id', $post->id)
                ->first();

            if (!$history) {
                ReadHistory::create([
                    'user_id' => $userId,
                    'post_id' => $post->id,
                    'read_at' => Carbon::now(),
                ]);
            }
        }

        return view('clients.post-detail', compact('post', 'relatedPosts', 'comments'));
    }

    public function featuredPosts()
    {
        $featuredPosts = Post::orderByDesc('view')->get();

        return $featuredPosts;
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
    public function profile()
    {
        return view('clients.users-profile');
    }
    // public function showRecentlyViewedPosts()
    // {
    //     // Lấy ID người dùng đã đăng nhập
    //     $userId = auth()->id();

    //     // Lấy các bài viết đã xem gần đây của người dùng
    //     $recentPosts = ReadHistory::with('post') // Eager loading để lấy bài viết
    //         ->where('user_id', $userId) // Lọc theo user_id
    //         ->latest('read_at') // Sắp xếp theo thời gian xem (mới nhất trước)
    //         ->limit(5) // Giới hạn số lượng bài viết muốn hiển thị
    //         ->get();

    //     return view('clients.recently-viewed', compact('recentPosts'));
    // }
}
