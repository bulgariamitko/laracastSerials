<?php

namespace Seeds\App;

use Illuminate\Database\Seeder;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Comment::class, 3)->times(20)->create();
    }
}
