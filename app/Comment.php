<?php

namespace App;

class Comment extends Model
{
    // Get the post a comment belongs to
    // $comment->post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // Get the user a comment belongs to
    // $comment->user->name
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
