<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ExternalController extends Controller
{
    public function index()
    {
        $posts=DB::table('external_areas')->where('id', '>', "0")->get();
        return view('introduction/external',['external_areas' => $posts]);
    }
}

