<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Post;

class PostsController extends Controller
{

    // Protect all routes other than index and show
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    // Show all posts
    public function index()
    {
        //$posts = Post::orderBy('created_at', 'asc')->get();
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    // Show posts
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Form to create a new post
    public function create()
    {
        return view('posts.create', [
            // 'title' => Str::random(10),
            // 'body' => Str::random(20)
        ]);
    }

    // Store a new post in the database
    public function store()
    {

        // Debugging
        //dd(request()->all());
        //dd(request('title'));
        //dd(request(['title', 'body']));

        // Validate request
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        // Manually assign each field and save to database
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();

        // Mass assign all fields and save to database
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        // Redirect to home page
        return redirect('/')->with('status', 'Post created!');
    }
}
