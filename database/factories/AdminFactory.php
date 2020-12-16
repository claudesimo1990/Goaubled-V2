<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(user::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => 'admin@admin.com',
        'password' => '$2y$10$gBSyzwffVCN/nmls9eQZd.egmGQcFfv4hPGyqjeahUR7G5nqyt6ke', //password
        'is_admin' > 1
    ];
});
