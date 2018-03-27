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

// one way
// $stripe = App::make('App\Billing\Stripe');
// second way
$stripe = resolve('App\Billing\Stripe');

Route::get('/', 'PostsController@index')->name('home');
Route::get('/home', 'PostsController@index');
// Route::get('/posts/', 'PostsController@show');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{task}', 'TaskController@show');

Route::get('/blog', 'BlogsController@index');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// my own registration
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');