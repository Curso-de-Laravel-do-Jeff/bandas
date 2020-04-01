<?php

use Illuminate\Database\Seeder;

class InstrumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new \App\Instrumento();

        $data = [
            'violão',
            'baixo',
            'guitarra',
            'gaita',
            'teclado',
            'bateria',
            'piano',
            'bandolim',
            'viola caipira',
            'baixolão'
        ];

        foreach ($data as $d) {
            $register =  [
                'name' => $d
            ];

            $model->create($register);
        }
    }
}
