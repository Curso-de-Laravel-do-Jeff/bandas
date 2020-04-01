<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Integrante::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'id_banda' => rand(1, 5)
    ];
});
