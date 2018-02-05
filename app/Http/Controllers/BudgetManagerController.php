<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BudgetManagerController extends FinancesController
{
    public function index() {
        
        $data = [
            
        ];
        
        return view('user.budget',$data);
    }
}
