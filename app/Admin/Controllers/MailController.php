<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
class MailController extends AdminController
{
    public function index(Content $content)
    {
        DB::table('visits')->where('result', false)
            ->chunkById(100, function ($visits) {
                foreach ($visits as $visit) {
                    DB::table('visits')
                        ->where('id', $visit->id)
                        ->update(['result' => true]);
                }

                $name = DB::table('users')->value('name');
                $email=DB::table('users')->value('email');
                $content='Welcome to Laravel 8! <br>This is a mail testing.<br>*******';
                $data = ['name' => $name, 'content'=> $content,];
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


