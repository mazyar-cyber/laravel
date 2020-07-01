<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sumulation extends Controller
{
    public function Sum($x, $y)
    {
        return view('pages.plus', compact('x', 'y'));
    }
}
