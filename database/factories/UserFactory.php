<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'email_verified_at' => $faker->dateTime(),
        'google_id' => $faker->word,
        'facebbook_id' => $faker->word,
        'avatar' => $faker->word,
        'avatar_original' => $faker->word,
        'password' => $faker->password,
    ];
});
