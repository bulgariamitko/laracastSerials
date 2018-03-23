<?php

use Symfony\Component\Finder\Finder;

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
    $files = Finder::create()
    	->in(app_path())
    	->name('*.php')
    	->contains('web');

    foreach ($files as $file) {
    	$contains = File::get($file->getRealPath());

    	str_replace('web', 'UPDATED!!!', $contains);

    	// write to file
    	// File::put($file->getRealPath(), $updated);
    }
});
