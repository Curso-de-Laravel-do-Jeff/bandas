<?php

use Illuminate\Database\Seeder;

class InstInteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\InstInte::class, 20)->create();
    }
}
