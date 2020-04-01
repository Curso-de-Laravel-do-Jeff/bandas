<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\InstInte::class, function (Faker $faker) {
    return [
        'id_inst' => rand(1, 10),
        'id_inte' => rand(1, 30)
    ];
});
