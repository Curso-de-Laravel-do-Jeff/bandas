<?php

use Illuminate\Database\Seeder;

class BandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Banda::class, 5)->create();
    }
}
