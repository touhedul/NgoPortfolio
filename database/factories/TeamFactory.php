<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'about' => $faker->sentence(),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'designation' => $faker->word,
        'image' => "15956534045f1bbd1ca2f7b.jpg",

    ];
});
