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

Route::get('/', function () {
    return view('welcome');
});

// 1 way
// Route::post('posts', function(Request $request) {
// 	$this->validate($request, ['body' => 'required']);
// 	Post::create($request->all());
// });

// 2 way
// Route::post('posts', function(\App\Http\Forms\PublishPostForm $form) {
// 	$form->save();
// 	return 'Success';
// });

// 3 way
Route::post('posts', function(\App\Http\Requests\PublishPostForm $form) {
	$form->persist();
	return 'Success';
});

Route::get('purchases', 'PurchasesController@store');