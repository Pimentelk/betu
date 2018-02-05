<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
	public function user() {
		return $this->belongsTo('App\User');
	}

	public function type() {
		return $this->belongsTo('App\Models\WorkoutType','type_id','id');
	}

	public function exercises() {
		return $this->hasMany('App\Models\Exercise');
	}

    public function scopeWorkouts() {
    	return $this->where('user_id',auth()->user()->id);
    }

    public function scopeWorkout($query,$id) {
    	return $query->where('id',$id)->first();
    }
}
