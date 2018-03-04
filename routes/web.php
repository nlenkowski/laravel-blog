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

Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

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
