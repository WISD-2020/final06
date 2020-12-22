<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Message;
use App\Repositories\MessageRepository;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function __construct(MessageRepository $messages)
    {
        $this->middleware('auth');
        $this->messages = $messages;
    }
    public function index(Request $request)
    {
        //$messages = $request->user()->messages()->get();
        $messages = Message::where('user_id', $request->user()->id)->get();
        return view('messages.index', [
            'messages' => $messages,
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        $request->user()->messages()->create($request->all());
//        $request->user()->messages()->create([
//            'name' => $request->name,
//        ]);

        return redirect('/messages');
    }
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect('/messages');
    }
}
