<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function index()
    {
        DB::table('visits')->where('result', false)
            ->chunkById(100, function ($visits) {
                foreach ($visits as $visit) {
                    DB::table('visits')
                        ->where('id', $visit->id)
                        ->update(['result' => true]);
                }

                $name = DB::table('users')->pluck('name')->get();
                $email=DB::table('users')->pluck('email')->get();
                $content='Welcome to Laravel 8! <br>This is a mail testing.<br>*******';
                $data = ['name' => $name, 'content'=> $content, ];
                Mail::send('email.mail', $data, function($message) use($name,$email) {
                    $message->subject('預約參訪');
                    $message->to($email, $name);
                    $message->from('ab53014698@gmail.com', 'admin');


        });
            });
        return 'email sent!';
//        return view('email/email');

    }
}


