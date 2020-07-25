<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Branch;
use Faker\Generator as Faker;

$factory->define(Branch::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'details' => $faker->paragraph(),
        'short_details' => $faker->sentence(),
        'phone' => "01833996321",

    ];
});
