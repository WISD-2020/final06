<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaysController extends Controller
{
    public function index()
    {
        return view('reservation/ways');
    }
}
