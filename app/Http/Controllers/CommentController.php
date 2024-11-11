<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = DB::table('comments')
    ->join('users', 'comments.user_id', '=', 'users.id')
    ->join('posts', 'comments.post_id', '=', 'posts.id')
    ->select('comments.*', 'users.name as user_name', 'posts.title as post_title')
    ->whereNull('comments.deleted_at')
    ->get();



    return view('admin.comments.index', compact('comments'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug)
    {
        // dd($request->all());
        // Xác thực yêu cầu (nếu cần)
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        // Tìm bài viết dựa trên slug
        $post = Post::where('slug', $slug)->first();

        if (!$post) {
            return redirect()->back()->with('error', 'Bài viết không tồn tại!');
        }

        // Lưu bình luận
        Comment::create([
            'content' => $request->input('content'),
            'post_id' => $post->id,
            'user_id' => auth()->id(), // Nếu đã đăng nhập
        ]);

        return redirect()->back()->with('success', 'Bình luận đã được thêm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::with(['user', 'post'])->findOrFail($id);
        return view('admin.comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          // Validate the incoming request data
          $request->validate([
            'is_approve' => 'required|boolean',
            'is_hidden' => 'required|boolean',
        ]);

        // Find the comment by its ID
        $comment = Comment::findOrFail($id);

        // Update the comment status
        $comment->is_approve = $request->is_approve;
        $comment->is_hidden = $request->is_hidden;
        $comment->save();

        // Redirect back with success message
        return redirect()->route('admin.comments.index')->with('success', 'Cập nhật trạng thái bình luận thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment =  Comment::findOrFail($id);

        $comment->delete();
        return redirect()->route('admin.comments.index')->with('success', 'Comment deleted successfully.');
    }
}
