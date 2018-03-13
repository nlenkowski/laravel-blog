<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    // Create new comment
    public function store()
    {
        $this->validate(request(), ['body' => 'required|min:2']);

        Comment::create(request(['body','post_id']));

        return back();
    }

    // Delete a comment
    public function delete(Comment $comment)
    {
        $comment->delete();

        return back()->with('status', 'Comment deleted!');
    }
}
