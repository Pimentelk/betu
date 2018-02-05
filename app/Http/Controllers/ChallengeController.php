<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Traits\Event;

class ChallengeController extends Controller
{
    use Event;
    
    public function index() {
        
        $this->setUserId();
                
        $data = [
            
        ];
        
        return view('user.challenge',$data);
    }
    
    public function joinChallenge(Request $request) {
        return false;
    }
    
    public function leaveChallenge(Request $request) {
        return false;
    }
    
    public function getChallenge(Request $request) {
        return false;
    }

    protected function getUserId() {
        return $this->user_id;
    }

    protected function setUserId() {
        $this->user_id = Auth::id();
    }
}
