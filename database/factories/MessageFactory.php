<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 5),
        'message' => $faker->sentence,
    ];
});
