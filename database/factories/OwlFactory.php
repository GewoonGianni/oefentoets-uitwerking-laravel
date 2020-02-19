<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owl;
use Faker\Generator as Faker;

$factory->define(Owl::class, function (Faker $faker) {
    return [
        'name' => $faker->paragraph(1),
//        'teacher_id' => App\Teacher::All()->random()->id,
        'is_resit' => $faker->boolean,
        'version_nr' => $faker->randomFloat(1),
        'comments' => $faker->text(1000),
    ];
});
