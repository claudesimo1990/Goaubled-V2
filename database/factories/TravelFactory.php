<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Travel;
use Faker\Generator as Faker;

$factory->define(Travel::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'User_id' => $faker->numberBetween(1, 20),
        'categorie_id' =>  (2 + 0),
        'vilDepart' => $faker->city,
        'vilArrive' => $faker->city,
        'dateDepart' => $faker->unixTime(),
        'dateArrive' => $faker->unixTime(),
        'content' => $faker->paragraphs(1, true),
        'kiloAvalable' => $faker->numberBetween(0, 20),
        'prixKilo' => $faker->numberBetween(10,50),
        'hasCourrier' => $faker->boolean,
        'prixCourrier' => $faker->numberBetween(10,50),
        'compagnie' => $faker->name,
        'photoBielletAvion' => $faker->name,
        'published_at' => $faker->dateTime(),
    ];
});
