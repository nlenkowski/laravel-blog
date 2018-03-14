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
Route::get('/', 'PostsController@index')->name('home');

// Create post
Route::get('/posts/create', 'PostsController@create');

// Store post
Route::post('/posts', 'PostsController@store');

// Show post
Route::get('/posts/{post}', 'PostsController@show');

// Store comment
Route::post('/comments', 'CommentsController@store');

// Delete comment
Route::delete('/comments/{comment}', 'CommentsController@delete');


// Create user
Route::get('/register', 'RegistrationController@create');

// Store user
Route::post('/register', 'RegistrationController@store');


// Login user
Route::post('/login', 'SessionsController@create');

// Logout user
Route::get('/logout', 'SessionsController@destroy');


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
