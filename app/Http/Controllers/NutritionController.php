<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Journal;

class NutritionController extends FitnessController
{
    public function index() {
        
        $data = [
            'journal' => Journal::all()
        ];
        
        return view('user.nutrition',$data);
    }
}
