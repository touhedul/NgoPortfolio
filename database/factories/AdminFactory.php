<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    return [
        'name' => "Admin",
        'email' => "admin@admin.com",
        'password' => bcrypt(456456456), // password
        'remember_token' => Str::random(10),
    ];
});
