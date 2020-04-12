<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chirp;
use Faker\Generator as Faker;

$factory->define(Chirp::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'body' => $faker->sentence,
    ];
});
