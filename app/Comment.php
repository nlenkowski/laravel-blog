<?php

namespace App;

class Comment extends Model
{
    // Get the post a comment belongs to
    public function post() {
        return $this->belongsTo(Post::class);
    }
}
