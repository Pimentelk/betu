<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PhilanthropyController extends FinancesController
{
    public function index() {
        
        $data = [
            
        ];
        
        return view('user.philanthropy',$data);
    }
}
