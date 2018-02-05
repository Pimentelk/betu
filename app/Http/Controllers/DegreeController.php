<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DegreeController extends EducationController
{
    public function index() {
        
        $data = [
            
        ];
        
        return view('user.degree',$data);
    }
    
    public function addOrUpdateDegree(Request $request) {
        return false;
    }
    
    public function deleteDegree(Request $request) {
        return false;
    }
}
