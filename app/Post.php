<?php

namespace App;

class Post extends Model
{
    // Get all comments for a post
    // $post->comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Get the user a post belongs to
    // $post->user->name
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
