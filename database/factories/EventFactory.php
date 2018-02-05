<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Event::class, function (Faker $faker) {
	
	$now = \Carbon\Carbon::now();
			
	$dMin = strtotime($now);
	$dMax = strtotime($now->addDays(28));
	
	$dVal = mt_rand($dMin, $dMax);
	
	$day = rand(0,10);
	
	$start_date = date("Y-m-d H:i:s",$dVal);
	
	$end_date = null;
	
	if ($day == 0) {
		$end_date = date("Y-m-d H:i:s",strtotime($start_date. " + 3 days"));
	}
	
    return [
        "user_id" 		=> 1,
		"title"			=> $faker->word,
		"description"	=> $faker->paragraph,
		"start_date"	=> $start_date,
		"end_date"		=> $end_date,
		"type"			=> function() {
			return rand(1,11);
		},
    ];
});
