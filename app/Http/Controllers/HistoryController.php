<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
class HistoryController extends Controller
{

    public function index()
    {
       $posts=DB::table('museum_histories')->where('id', '>', "1")->get();
        return view('introduction/history',['museum_histories' => $posts]);
    }
}

