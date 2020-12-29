<?php

namespace App\Http\Controllers;

use App\Models\Visits;
use App\Repositories\VisitRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Way;

class VisitsController extends Controller
{
    public function __construct(VisitRepository $visits)
    {
        $this->middleware('auth');
        $this->visits = $visits;
    }
    public function index(Request $request)
    {
        $visits = Visits::where('user_id', $request->user()->id)->get();
        return view('reservation.visits', [
            'visits' => $visits,
        ]);
    }
//    protected $casts = ['date' => 'date',];
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'period' => 'required',
            'way_id'=> 'required',
        ]);
        $request->user()->visits()->create($request->all());
        return redirect()->route('dashboard');

    }
}
