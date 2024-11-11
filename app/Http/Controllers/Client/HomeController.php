<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
    
    public function postDetail($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->latest('id')
            ->limit(3)
            ->get();

        return view('clients.post-detail', compact('post', 'relatedPosts'));
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
    public function profile(){
        return view('clients.users-profile');
    }
}
