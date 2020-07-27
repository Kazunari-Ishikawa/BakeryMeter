<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BakeryController extends Controller
{
    public function index(){
        return view('bakery.index');
    }
}
