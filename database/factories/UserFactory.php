<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => '$2y$10$gBSyzwffVCN/nmls9eQZd.egmGQcFfv4hPGyqjeahUR7G5nqyt6ke', //password
        'is_admin' > 1
    ];
});
