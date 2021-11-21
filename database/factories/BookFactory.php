<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'author' => $faker->name,
        'genre' => $faker->word,
        'price' => $faker->randomFloat()
    ];
});
