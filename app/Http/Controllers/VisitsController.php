<?php

namespace App\Http\Controllers;

use App\Models\Visits;
use App\Repositories\VisitRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Commentator;

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

        //$messages = Message::where('user_name', $request->user()->name)->get();
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
//        $commentator_id = $request->input('commentator_id');

//        $post = $request->except('date', 'period', 'way_id');

//        $date = $request->input('date');
//        $period = $request->input('period');
//        $way_id = $request->input('way_id');
        return redirect()->route('/visits');

    }
}
