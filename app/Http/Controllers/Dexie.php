<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dexie extends Controller
{
    public function index(){
        return view('dexie');
    }
}
