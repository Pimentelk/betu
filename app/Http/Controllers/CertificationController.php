<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CertificationController extends EducationController
{
    public function index() {
        
        $data = [
            
        ];
        
        return view('user.certification',$data);
    }
}
