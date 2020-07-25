<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'message' => $faker->paragraph(),
        'about' => $faker->sentence(),
        'image' => "15956534045f1bbd1ca2f7b.jpg",

    ];
});
