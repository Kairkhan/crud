<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->unique()->sentence,
        'body' => $faker->paragraph,
        'user_id' => $faker->unique()->numberBetween(1, App\User::count())
    ];
});

