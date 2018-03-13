<?php

namespace App;

class Post extends Model
{
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

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
