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

$foods = ['Eggs 12pk', 'Milk 3%','Tomatos'];

$factory->define(Fridge\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Fridge\Item::class, function(Faker\Generator $faker){
    return [
        'name' => $foods[rand(0, count($foods))],
        'expire' => $faker->dateTime,
    ];
});