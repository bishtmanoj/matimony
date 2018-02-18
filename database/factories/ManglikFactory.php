<?php

use Faker\Generator as Faker;

$factory->define(App\Manglik::class, function (Faker $faker) {
    return [
        ['slug' => 'yes', 'name' => 'Yes'],
        ['slug' => 'no', 'name' => 'No'],
        ['slug' => 'anshik-manglik', 'name' => 'Anshik Manglik'],
        ['slug' => 'dont-know', 'name' => 'Dont Know'],
    ];
});