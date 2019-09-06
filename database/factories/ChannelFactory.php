<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Channel;
use Faker\Generator as Faker;
//Run This Factory Instruction
//Run : php artisan tinker
//Run : factory(\App\Channel::class, 20)->create();

$factory->define(Channel::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
