<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Workout;
use App\Models\WorkoutType;

class WorkoutController extends FitnessController
{    
    public function index() 
    {
        $data = [
            'workouts' => Workout::workouts()->get()->load('user','type')
        ];
        
        return view('user.workout',$data);
    }

    public function show(Workout $workout) 
    {

		$data = [
	        'workout' => $workout->load('exercises','type')
	    ];        
	    return view('user.builder',$data);
    }

    public function update(Request $request, Workout $workout) 
    {
    	if ($request->has('workout.title')) {
    		$workout->title = $request->input('workout.title');
    	}

    	if ($request->has('workout.type')) {

    		$workout_type = WorkoutType::where('name',$request->input('workout.type'))->first();

    		if (is_null($workout_type)) {
    			$workout_type = new WorkoutType;
    			$workout_type->name = $request->input('workout.type');
    			$workout_type->save();
    		}

    		$workout->type_id = $workout_type->id;
    	}
    	
    	if ($request->has('workout.notes')) {
    		$workout->notes = $request->input('workout.notes');
    	}
	
    	if ($workout->save()) {
    		return response($workout,202);
    	}
    	return response("Expectation Failed",417);
    }
}
