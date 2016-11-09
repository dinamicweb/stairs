<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index(){
       return view('index');
    }

    public function contacts(){
        return view('contacts');
    }

    public function feedback(){
        return view('feedback');
    }
}
