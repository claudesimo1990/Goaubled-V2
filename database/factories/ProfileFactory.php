<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'prenom' => $faker->word,
        'birthDay' => $faker->dateTime(),
        'ville' => $faker->word,
        'pays' => $faker->word,
        'rue' => $faker->word,
        'phone' => $faker->phoneNumber,
        'isVerified' => $faker->boolean,
        'avatar' => $faker->word,
        'avatar_original' => $faker->word,
    ];
});
