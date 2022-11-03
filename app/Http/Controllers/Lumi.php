<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lumi extends Controller
{
    public function Index() {
        return view('lumi');
    }
}
