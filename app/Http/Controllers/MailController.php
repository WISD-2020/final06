<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $name='李四';
        $content='Welcome to Laravel 8! <br>This is a mail testing.<br>*******';
        $data = ['name' => $name, 'content'=> $content, ];
        Mail::send('email.mail', $data, function($message) use($name) {
            $message->subject('Mail Testing');
            $message->to('ab53014698@yahoo.com.tw', $name);
            $message->from('ab53014698@gmail.com', 'admin');
        });
        return 'email sent!';
//        return view('email/email');
    }
}
