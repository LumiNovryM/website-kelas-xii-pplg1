<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dhykas extends Controller
{
    public function dhykas() {
        return view('dhykas');
    }
}