<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Journal::class, function (Faker $faker) {
    return [
        'name' 			=> $faker->name,
        'servings' 		=> rand(1,4),
        'size' 			=> rand(1,5),
        'user_id'		=> 1,
        'meal_type'		=> function() {
        	$meal_types = Config::get('constants.MEALTYPES');
        	return rand(1,count($meal_types));
        },
        'sugar'         => rand(0.0,50.0),
        'calories'		=> rand(90,600),
        'carbs'			=> rand(0.0,100.0),
        'fat' 			=> rand(0.0,50.0),
        'protein'		=> rand(0.0,15.0),
        'notes'			=> $faker->paragraph,
    ];
});
