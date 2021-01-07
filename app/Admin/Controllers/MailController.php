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
use App\Models\User;
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
            });
//        $date=DB::table('visits')->pluck('date');
//        $period=DB::table('visits')->pluck('period');
//        $way=DB::table('visits')->pluck('way_id');
//        $content='預約成功!!<br>您已成功於'.$date.$period.'預約國美館路線'.$way.'的參訪';
        $content='恭喜您成功預約國美館參訪!!!';
        User::all()->each( function ($user) use($content){
            Mail::send(
                'email.mail',
                [
                    'name' => $user->name,
                    'content'=> $content,
                ],
                function($message) use($user){
                    $message->subject('預約參訪');
                    $message->to($user->email, $user->name);
                    $message->from('ab53014698@gmail.com', 'admin');
                }
            );

        });
        return '寄出email確認參訪!';
    }
    /*public function send()
    {

    }*/


}

