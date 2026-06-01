<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogComment;

class CommentController extends Controller
{
    // ── Public: store comment from blog-details form ──────────────────────────
    public function store(Request $request, $blogId)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'message' => 'required|string|max:1000',
        ]);

        BlogComment::create([
            'blog_id' => $blogId,
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
            'status'  => 'pending',
        ]);

        return back()->with('comment_success', 'Your comment has been submitted and is awaiting approval.');
    }

    // ── Admin: list all comments ──────────────────────────────────────────────
    public function index(Request $request)
    {
        $comments = BlogComment::with('blog')
                               ->when($request->status, fn($q) => $q->where('status', $request->status))
                               ->latest()
                               ->paginate(15);

        return view('admin.comments.index', compact('comments'));
    }

    // ── Admin: approve comment ────────────────────────────────────────────────
    public function approve(BlogComment $comment)
    {
        $comment->update(['status' => 'approved']);
        return back()->with('success', 'Comment approved.');
    }

    // ── Admin: reject comment ─────────────────────────────────────────────────
    public function reject(BlogComment $comment)
    {
        $comment->update(['status' => 'rejected']);
        return back()->with('success', 'Comment rejected.');
    }

    // ── Admin: delete comment ─────────────────────────────────────────────────
    public function destroy(BlogComment $comment)
    {
        $comment->delete();
        return back()->with('success', 'Comment deleted.');
    }
}
