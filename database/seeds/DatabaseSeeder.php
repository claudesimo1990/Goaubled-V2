<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function ($user) {
            $user->profile()->save(factory(App\Profile::class)->make());
            $user->comments()->save(factory(App\Comment::class)->make());
        });

        $this->call([
             TravelTableSeeder::class,
             ColiTableSeeder::class,
            MessageTableSeeder::class,
        ]);

    }
}
