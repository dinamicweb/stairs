<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CatalogController extends Controller
{
    public function catalog(){
    return view('catalog');
}
}
