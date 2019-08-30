<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\User;
use App\Model;
use App\UserTeam;
use App\FantasyTeam;
use App\FantasyDriver;
use Faker\Generator as Faker;

$factory->define(UserTeam::class, function (Faker $faker) {
    $user = factory(App\User::class)->create();
    $driver1 = factory(App\FantasyDriver::class)->create();
    $driver2 = factory(App\FantasyDriver::class)->create();
    $driver3 = factory(App\FantasyDriver::class)->create();
    $driver4 = factory(App\FantasyDriver::class)->create();
    $driver5 = factory(App\FantasyDriver::class)->create();
    $team1 = factory(App\FantasyTeam::class)->create();

    return [
        'user_id' => $user->id,
        'driver_1_id' => $driver1->id,
        'driver_2_id' => $driver1->id,
        'driver_3_id' => $driver1->id,
        'driver_4_id' => $driver1->id,
        'driver_5_id' => $driver1->id,
        'team_1_id' => $team1->id,
        'points' => $faker->randomDigit,
        'value' => $faker->randomDigit,
        'wildcard' => 1,
    ];
});
