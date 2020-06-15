<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'User_id' => $faker->numberBetween(1, 30),
        'addressTo' => factory(\App\User::class),
        'content' => $faker->paragraphs(1, true),
    ];
});
