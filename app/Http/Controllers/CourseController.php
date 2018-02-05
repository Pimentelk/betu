<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseController extends EducationController
{
    public function index() {
        
        $data = [
            
        ];
        
        return view('user.course',$data);
    }
    
    public function addOrUpdateController(Request $request) {
        return false;
    }
    
    public function deleteCourse(Request $request) {
        return false;
    }
}
