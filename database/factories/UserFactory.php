<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'admin',
        'email' => $faker->email,
        'email_verified_at' => $faker->dateTime(),
        'google_id' => $faker->word,
        'facebbook_id' => $faker->word,
        'avatar' => $faker->word,
        'avatar_original' => $faker->word,
        'password' => '$2y$10$gBSyzwffVCN/nmls9eQZd.egmGQcFfv4hPGyqjeahUR7G5nqyt6ke', //password
        'is_admin' => 0
    ];
});
