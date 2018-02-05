<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompetitionController extends FitnessController
{
    public function index() {
        
        $data = [
            
        ];
        
        return view('user.competition',$data);
    }
    
    public function addOrUpdateCompetition() {
        return false;
    }
    
    public function deleteCompetition() {
        return false;
    }
}
