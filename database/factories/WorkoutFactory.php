<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Workout::class, function (Faker $faker) {
    return [
        'type_id'		=> function() {
        	return rand(1,15);
        },
        'user_id'		=> 1,
        'title'			=> $faker->name,
        'notes'			=> $faker->paragraph
    ];
});
