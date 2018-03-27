<?php

// login a user
// Auth::loginUsingId(1);

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

// lessson 1 - forms
Route::get('/', function () {
	$user = factory('App\User')->create();
    return view('welcome', compact('user'));
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

// lesson 2 - purchases
Route::get('purchases', 'PurchasesController@store');

// lesson 3 - registering a user
Route::get('users', 'UsersController@store');

// lesson 7 - policy's
Route::get('teams/{team_id}/members', 'TeamMembersController@store');

// lesson 13 - decorating
Route::get('tutorial', 'TutorialsController@store');

// lesson 16 - staying true to the 7 resourceful methods
Route::get('conversations', 'ConversationsController@index');
Route::post('subscriptions', 'ThreadsSubscriptionsController@store');