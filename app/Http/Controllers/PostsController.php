<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Add controller action for index view
    public function index()
    {
        return view('posts.index');
    }

}
