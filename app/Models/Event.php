<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function user() {
		return $this->belongsTo('App\User');
	}
	
	public function events() {
		return $this->where('user_id',auth()->user()->id);
	}
}
