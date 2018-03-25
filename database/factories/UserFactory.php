<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|~
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'role_id' => 2,
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'date_of_birth' => \Carbon\Carbon::now()->subYears(25),
        //'phone' => '9981'.$faker->randomDigit(6,true),
        'password' => bcrypt('secret')
    ];
});
