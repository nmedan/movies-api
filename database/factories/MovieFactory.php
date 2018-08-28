<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl,
        'duration' => $faker->randomNumber,
        'releaseDate' => $faker->date,
        'genre' => $faker->word
    ];
});
