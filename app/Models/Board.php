<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    protected $fillable = ['title']; // 新增
    public function user()
    {
        return $this->belongsTo(User::class);
        /*$user = App\User::find(1);

        foreach ($user->boards as $board)
        {
            echo $board->title;
        }*/
    }

}
