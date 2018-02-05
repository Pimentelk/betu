<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Event as Calendar;

class CalendarController extends Controller
{    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        
        $data = [
			'events' => Calendar::where('user_id',auth()->user()->id)->get()
        ];
        
        return view('user.calendar',$data);
    }
}
