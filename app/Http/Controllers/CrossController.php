<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrossController extends Controller
{
    public function Cross($x,$y){
        return view("pages.plus",compact('x','y'));
    }
}
