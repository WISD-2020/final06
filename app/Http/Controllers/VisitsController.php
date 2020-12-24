<?php

namespace App\Http\Controllers;

use App\Models\Visits;
use Illuminate\Http\Request;

class VisitsController extends Controller
{
    public function index()
    {
        $posts = Visits::orderBy('id', 'DESC')->get();
        $data = ['posts' => $posts];
        return view('reservation.visits', $data);
    }

    public function store(Request $request)
    {
        $post = Visits::create($request->all());

//        $post = $request->except('date', 'period', 'way_id');

//        $date = $request->input('date');
//        $period = $request->input('period');
//        $way_id = $request->input('way_id');
        return redirect()->route('reservation.visits');

    }
}
