<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

    // Controller actions
    public function index()
    {
        return view('posts.index');
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        // Debugging
        //dd(request()->all());
        //dd(request('title'));
        //dd(request(['title', 'body']));

        // Manually assign each field and save to database
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();

        // Mass assign all fields and save to database
        Post::create(request(['title', 'body']));

        // Redirect to home page
        return redirect('/');
    }
}
