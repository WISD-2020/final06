<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Message;
use App\Repositories\MessageRepository;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{

    public function index()
    {
        //$messages = $request->user()->messages()->get();
//        $messages = Message::where('user_id', $request->user()->id)->get();
//        return view('messages.index', [
//            'messages' => $messages,
//        ]);
        return view('introduction/history');
    }
}
