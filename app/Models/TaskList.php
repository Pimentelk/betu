<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use User;
use App\Models\Task;

class TaskList extends Model
{
	protected $fillable = ['user_id','status','title'];
    
	public function user() {
		return $this->belongsTo(User::class);
	}

	public function tasks() {
		return $this->hasMany(Task::class,'list_id');
	}

    public function scopeLists() {
    	return $this->where('user_id',auth()->user()->id);
    }
}
