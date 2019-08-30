<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\FantasyTeam;
use App\FantasyDriver;
use Faker\Generator as Faker;

$factory->define(FantasyDriver::class, function (Faker $faker) {
    $team = factory(App\FantasyTeam::class)->create();
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'team' => $team->id,
        'points' => $faker->randomDigit,
        'value' => $faker->randomDigit
    ];
});
