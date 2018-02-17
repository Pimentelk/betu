<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\TaskList;
use App\User;

class Task extends Model
{
    public function list() {
    	return $this->belongsTo(TaskList::class);
    }
}
