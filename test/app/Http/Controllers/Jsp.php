<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jsp extends Controller
{
    public function index(){
        return view("welcome");
    }
}
