<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\FantasyTeam;
use App\Model;
use Faker\Generator as Faker;

$factory->define(FantasyTeam::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'points' => $faker->randomDigit,
        'value' => $faker->randomDigit
    ];
});
