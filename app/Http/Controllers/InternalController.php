<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternalController extends Controller
{
    public function index()
    {
        return view('introduction/internal');
    }
}


