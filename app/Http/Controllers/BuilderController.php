<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Workout;
use App\Models\Exercise;

class BuilderController extends Controller
{    
    public function index() {        
        return redirect()->route('workout.index');
    }

    public function update(Request $request, Exercise $exercise)
    {
    	if (is_null($exercise)) {
    		return response("Exercise Not Found",417);
    	}

    	$exercise->name = $request->input('exercise.name');
    	$exercise->sets = $request->input('exercise.sets');
    	$exercise->reps = $request->input('exercise.reps');
    	$exercise->weight = $request->input('exercise.weight');
    	$exercise->duration = $request->input('exercise.duration');

    	if ($exercise->save()) {
    		return response($exercise,202);
    	}
    	return response("Expectation Failed",417);
    }

    public function destroy(Exercise $exercise)
    {
    	if (is_null($exercise)) {
    		return response("Exercise Not Found",417);
    	}

    	if ($exercise->delete()) {
    		return response($exercise,202);
    	}
    	return response("Expectation Failed",417);
    }

    public function store(Request $request)
    {
    	$exercise = new Exercise;
    	$exercise->workout_id = $request->input('workout_id');
    	$exercise->name = 'new exercise';
    	$exercise->sets = 0;
    	$exercise->reps = 0;
    	$exercise->weight = 0;
    	$exercise->duration = "1:00";

    	if ($exercise->save()) {
    		return response($exercise,202);
    	}
    	return response("Expectation Failed",417);
    }
}
