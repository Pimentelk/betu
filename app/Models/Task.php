<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function tasklist() {
    	return $this->belongsTo('App\Models\TaskList','id','list_id');
    }
}
