<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Program;
use Faker\Generator as Faker;

$factory->define(Program::class, function (Faker $faker) {
    
    $categories = ["Activity","Event","Program","Project","Service","Affiliate","Branch"];
    return [
        'title' => $faker->sentence,
        'details' => $faker->paragraph,
        'category' => $faker->randomElement($categories),
        'image' => "15799412595e2bfd8b0456b.png",
    ];
});
