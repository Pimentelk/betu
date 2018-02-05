<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CreditScoreController extends FinancesController
{
    public function index() {
        
        $data = [
            
        ];
        
        return view('user.credit',$data);
    }
}
