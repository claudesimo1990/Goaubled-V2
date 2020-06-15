<?php

use Illuminate\Database\Seeder;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Travel::class,50)->create();
    }
}
