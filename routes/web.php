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


Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::post('/posts','PostController@store') ->name('posts.store');
Route::get('/posts','PostController@index')->name('posts.index');
Route::get('/posts/create','PostController@create') -> name('posts.create');
Route::put('/posts/{post}','PostController@update')-> name('posts.update');
Route::get('/posts/{post}/edit','PostController@edit') -> name('posts.edit');
Route::get('/posts/{post}','PostController@show') ->name('posts.show');
Route::get('/posts/{post}/delete','PostController@delete') -> name('posts.delete');
Route::delete('/posts/{post}','PostController@destroy') -> name('posts.destroy');
Route::get('/categories/{category}','CategoryController@index')->name('categories.index');
Route::get('/profile/','UserController@index')->name('user.index');
Route::get('/profile/posts','UserController@show')->name('user.show');
