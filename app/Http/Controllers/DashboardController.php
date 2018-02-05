<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Traits\Event;
    
class DashboardController extends Controller {
    
    use Event;
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        
        $this->setUserId();
        
        $data = [
            
        ];
        
        return view('user.dashboard',$data);
    }
    
    protected function setUserId() {
        $this->user_id = Auth::id();
    }
    
    protected function getUserId() {
        return $this->user_id;
    }
}
