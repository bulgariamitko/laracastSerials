<?php

use App\Post;
use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => function () {
			return factory(Post::class)->create()->id;
		},
		'body' => $faker->paragraph,
    ];
});
