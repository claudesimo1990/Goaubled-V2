<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'travel_id' => factory(\App\Travel::class),
        'coli_id' => factory(\App\Coli::class),
        'content' => $faker->sentence(10, true),
    ];
});
