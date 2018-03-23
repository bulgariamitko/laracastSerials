<?php

use App\Post;
use App\Comment;
use Illuminate\Database\Seeder;
use Seeds\App\CommentsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Comment::truncate();

        $this->call(PostsTableSeeder::class);
        $this->call(Seeds\App\CommentsTableSeeder::class);
    }
}
