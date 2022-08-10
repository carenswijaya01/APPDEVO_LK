<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class points extends Controller
{
    public function index()
    {
        return view('points');
    }
}
