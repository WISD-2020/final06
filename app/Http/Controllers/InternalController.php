<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class InternalController extends Controller
{
    public function index()
    {
        $posts=DB::table('internal_areas')->where('id', '>', "1")->get();
        return view('introduction/internal',['internal_areas' => $posts]);
    }
}


