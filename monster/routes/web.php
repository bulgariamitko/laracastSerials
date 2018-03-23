<?php

use App\Http\Forms\PublishPostForm;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('posts', function() {
	// simple way
	// $this->validate($request, ['title' => 'required']);
	// Post::create();

	// PublishPostForm - object
	$form = new PublishPostForm;
	$form->save();
	return 'Success';
});