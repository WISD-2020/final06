<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $messages = $request->user()->messages()->get();

        return view('messages.index', [
            'messages' => $messages,
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->messages()->create([
            'name' => $request->name,
        ]);

        return redirect('/messages');
    }
    public function destroy(Request $request, Message $message)
    {
        $message->delete();

        return redirect('/messages');
    }
}
