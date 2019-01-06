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
route::get('/','Postscontroller@index');
route::get('/posts/create','Postscontroller@create');
route::get('/posts/{post}','Postscontroller@show');
route::get('/posts/tags/{tags}','Tagscontroller@index');
route::post('/posts','Postscontroller@store');
route::post('/post/{post}/comments','CommentsController@store');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
