<?php

use Illuminate\Database\Seeder;

class IntegranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Integrante::class, 30)->create();
    }
}
