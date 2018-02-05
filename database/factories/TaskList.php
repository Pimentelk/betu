<?php

use Faker\Generator as Faker;

/*
$factory->define(App\Models\TaskList::class, function (Faker $faker) {
    return [
        "user_id" 	=> 1,
        "title"		=> $faker->firstName . " List",
        "status"	=> 1
    ];
});
*/

$factory->define(App\Models\Task::class, function (Faker $faker) {
	return [
		"title"			=> $faker->word,
		"description" 	=> $faker->text,		
		"list_id" 		=> rand(1,10),
		"category_id" 	=> 1,
		"complete" 		=> rand(0,1),
	];
});