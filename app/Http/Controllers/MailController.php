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

                $name = DB::table('users')->pluck('name');
                $email=DB::table('users')->pluck('email');
                $date=DB::table('visits')->pluck('date');
                $period=DB::table('visits')->pluck('period');
                $way=DB::table('visits')->pluck('way_id');
                $content='預約成功!!<br>您已成功於'.$date.$period.'預約國美館路線'.$way.'的參訪';
                $data = ['name' => $name, 'content'=> $content, ];
                Mail::send('email.mail', $data, function($message) use($name,$email) {
                    $message->subject('預約參訪');
                    $message->to($email, $name);
                    $message->from('ab53014698@gmail.com', 'admin');
                });
            });
        return 'email sent!';
    }
}


