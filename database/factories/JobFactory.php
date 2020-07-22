<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'details' => $faker->paragraph(),
        'location' => $faker->locale,
        'last_date' => $faker->date(),

    ];
});
