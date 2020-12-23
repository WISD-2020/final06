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
        return redirect()->route('reservation.visits');

    }
}
