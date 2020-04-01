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
        $this->call(BandaSeeder::class);
        $this->call(InstInteSeeder::class);
        $this->call(InstrumentoSeeder::class);
        $this->call(IntegranteSeeder::class);
    }
}
