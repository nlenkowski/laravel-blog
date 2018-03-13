<?php

namespace App;

class Post extends Model
{
  // Get all comments for a post
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  // Add a comment to a post
  public function addComment($body)
  {

    // Use eloquent relationship to add comment
    $this->comments()->create(compact('body'));

    // Use long form method to add comment
    // Comment::create([
    //   'body' => $body,
    //   'post_id' => $this->id
    // ]);
  }
}
