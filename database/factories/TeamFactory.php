<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Program;
use Faker\Generator as Faker;

$factory->define(Program::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'details' => $faker->paragraph,
        'image' => "15799412595e2bfd8b0456b.png",
        'tags' => $faker->word,
        'posted_by' => $faker->name,
    ];
});
