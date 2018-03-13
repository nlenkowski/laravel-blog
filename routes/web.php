<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Show all posts
Route::get('/', 'PostsController@index');

// Form to create a post
Route::get('/posts/create', 'PostsController@create');

// Store a post in the database
Route::post('/posts', 'PostsController@store');

// Show a post
Route::get('/posts/{post}', 'PostsController@show');

// Store a comment
Route::post('/posts/{post}/comments', 'CommentsController@store');

// Delete a comment
Route::get('/comments/{comment}/delete', 'CommentsController@delete');


/*
Posts endpoints
---------------

GET /posts // Show all posts

GET /posts/{id} // Show one post

GET /posts/create // Form to create a post

POST /posts // Store new post in database

GET /posts/{id}/edit // Form to edit an existing post

PATCH /posts/{id} // Patch existing post

DELETE /posts/{id} // Delete existing post

*/
