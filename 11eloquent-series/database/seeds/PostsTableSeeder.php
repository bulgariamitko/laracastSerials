<?php

use App\Post;
use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
    	// path to factory files
    	TestDummy::$factoriesPath = 'database/factories';
    	$post = factory(\App\Post::class, 3)->times(50)->create();
    }
}