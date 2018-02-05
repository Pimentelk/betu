<?php

use Illuminate\Database\Seeder;

use App\Models\WorkoutType;

class WorkoutTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workout_types = [
			'Running','Hiking','Walking','Swimming','Biking',
			'Treadmill','Circuit Training','Dance','Eliptical','Rowing',
			'Stationary Bike','Stair-master','Aerobics','Intervals','Weight Training'
		];

		foreach ($workout_types as $workout_type) {
			DB::table('workout_types')->insert([
				'name' => $workout_type
			]);
		}

		factory(App\Models\Workout::class,20)->create();
		factory(App\Models\Exercise::class,250)->create();	
    }
}
