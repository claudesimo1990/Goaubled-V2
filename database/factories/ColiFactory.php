<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coli;
use Faker\Generator as Faker;

$factory->define(Coli::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'User_id' => $faker->numberBetween(1, 30),
        'categorie_id' => (1 + 0),
        'vilDepart' => $faker->city,
        'vilArrive' => $faker->city,
        'date_depart' => $faker->dateTimeBetween('now', '+30 years'),
        'date_arrive' => $faker->dateTimeBetween('now', '+30 years'),
        'content' => $faker->paragraphs(1, true),
        'kilo' => $faker->numberBetween(0,30),
        'prix' => $faker->numberBetween(10,50),
        'isCourrier' => $faker->boolean,
        'isvalise' => $faker->boolean,
        'photo' => $faker->word,
        'published_at' => $faker->dateTime(),
    ];
});
