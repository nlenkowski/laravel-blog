<?php

namespace App;

class Post extends Model
{
  // Get all comments for a post
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }
}
