<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $fillable = ['user_id','title','author','learned','notes','read'];
    protected $primary_key = 'id';

	public function scopeList($query) {
		return $query->where('user_id',auth()->user()->id);
	}

    public function scopeRead($query) {
        return $query->where('user_id',auth()->user()->id)->where('read',1);
    }
    
    public function scopeUnRead($query) {
        return $query->where('user_id',auth()->user()->id)->where('read',0);
    }    
}
