<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Traits\Education;

class EducationController extends Controller
{
    use Education;
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        
        $data = [
            
        ];
        
        return view('user.education',$data);
    }
    
    protected function getUserId() {
        return $this->user_id;
    }

    protected function setUserId() {
        $this->user_id = Auth::id();
    }
}
