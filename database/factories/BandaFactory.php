<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Banda::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName
    ];
});
