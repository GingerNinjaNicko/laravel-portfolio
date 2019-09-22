<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merch;
use Faker\Generator as Faker;

$factory->define(Merch::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name(),
        'cost' => $faker->numberBetween(1, 300),
        'stock' => $faker->numberBetween(1, 300),
    ];
});
