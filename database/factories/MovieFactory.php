<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Movie::class, function (Faker $faker) {
    //We will make a collection so we can use random method
    $values = collect([
        'Action',
        'Comedy',
        'Drama',
        'Horror',
        'Western',
        'Thriller',
        'Animation',
        'Documentary'
    ]);

    return [
        'name' => $faker->text(80),
        'director' => $faker->name,
        'image_url' => $faker->imageUrl(),
        'duration' => $faker->numberBetween(60, 200),
        'release_date' => $faker->date(),
        'genres' => $values->random(3)
    ];
});
