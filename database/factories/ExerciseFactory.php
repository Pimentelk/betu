<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Exercise::class, function (Faker $faker) {
    return [
        'workout_id'	=> function() {
        	return rand(1,20);
        },
        'name'			=> function() {

        	$workouts = [
        		'Jump Squats',
        		'Push-ups',
        		'Plank Rotations',
        		'Plank Punches',
        		'Tricep Extensions',
        		'Sit-ups',
        		'March Steps',
        		'Squats',
        		'Side Kicks',
        		'Punches',
        		'Arm Scissors',
        		'Side Lunges',
        		'Decline Weighted Situp',
        		'Rope Crunch',
        		'Hanging Leg Raise',
        		'Rotational Crunch',
        		'Bicycle Crunch',
        		'General Plank',
        		'Sprint',
        		'Pec Flye'
        	];
        	return $workouts[rand(0,19)];
        },
        'sets'			=> rand(2,5),
        'reps'			=> rand(6,12),
        'weight'		=> function() {
        	return rand(1,10) * 5;
        },
        'duration'		=> function() {
        	return rand(1,5) . ':00';
        },
    ];
});
