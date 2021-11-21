<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merchandise;
use Faker\Generator as Faker;

$factory->define(Merchandise::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(),
        'quantity' => $faker->randomDigit,
        'price' => $faker->numberBetween(1,100)
    ];
});
