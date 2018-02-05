<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GoalController extends CalendarController
{
    public function index() {        
        
        $data = [
            
        ];
        
        return view('user.goal',$data);
    }
}
