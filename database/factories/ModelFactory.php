<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});

$factory->define(App\Document::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});


$factory->define(App\Lesson::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'view' => $faker->numberBetween(1000, 10000),
        'length' => $faker->numberBetween(100, 1000),
        'difficulty' => $faker->randomElement($array = array ('beginner','intermediate', 'advance'))
    ];
});
