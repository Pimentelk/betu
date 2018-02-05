<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
	protected $fillable = ['user_id','status','title'];
    
	public function user() {
		return $this->belongsTo('App\User');
	}

	public function tasks() {
		return $this->hasMany('App\Models\Task','list_id');
	}

    public function scopeLists() {
    	return $this->where('user_id',auth()->user()->id);
    }
}
