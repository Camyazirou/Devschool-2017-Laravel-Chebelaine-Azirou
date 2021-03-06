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

 $factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence(),
        'content' => $faker->text(),
        'user_id' => $faker->numberBetween(1, 20),
    ];
});

$factory->define(App\Models\Event::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence(),
        'description' => $faker->text(),
        'place' => $faker->text(),
        'price'=>$faker->numberBetween(0,100),
        'user_id' => $faker->numberBetween(1, 20),
    ];
});
