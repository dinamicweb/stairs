<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CalculationController extends Controller
{
    public function calculation(){
        return view('calculation');
    }

    public function onlineCalculation(){
        return view('online_calculation');
    }
}
