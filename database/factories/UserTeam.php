<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\User;
use App\UserTeam;
use Faker\Generator as Faker;

$factory->define(UserTeam::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'driver_1_id' => $faker->randomDigit,
        'driver_2_id' => $faker->randomDigit,
        'driver_3_id' => $faker->randomDigit,
        'driver_4_id' => $faker->randomDigit,
        'driver_5_id' => $faker->randomDigit,
        'team_1_id' => $faker->randomDigit,
        'points' => $faker->randomDigit,
        'value' => $faker->randomDigit,
        'wildcard' => 1,
    ];
});
