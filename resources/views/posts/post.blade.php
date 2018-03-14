<div class="blog-post">
  <h2 class="blog-post-title"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h2>
  <p class="blog-post-meta">By {{ $post->user->name }} at {{ $post->created_at->toFormattedDateString() }}</p>
  <p>{{ $post->body }}</p>
</div>
<!-- /.blog-post -->