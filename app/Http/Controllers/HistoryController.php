<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
use App\Repositories\MessageRepository;
use App\Http\Controllers\Controller;
use App\Models\History;
class HistoryController extends Controller
{

    public function index()
    {
       $posts=DB::table('museum_histories')->where('id', '>', "1")->get();
        return view('introduction/history',['museum_histories' => $posts]);





        //$his= Auth::museum_histories()->get();
        //$his= DB::table('museum_histories')->get();
//        foreach (History::all() as $history) {
//            echo '<tr>';
//            echo '<td>'.$history->date.'</td>';
//            echo '<td>'.$history->end_date.'</td>';
//            echo '<td>'.$history->text.'</td>';
//            echo '</tr>';
//
//        History::chunk(200, function ($histories) {
//            foreach ($histories as $history) {
//                echo "<tr>";
//                    echo "<td width='15%' align='center'>".$history->date."</td>";
//                    echo "<td width='15%' align='center'>".$history->end_date."</td>";
//                    echo "<td>".$history->text."</td>";
//                echo "</tr>";
//            }
//        });




    }
}

