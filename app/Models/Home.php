<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'id';
    public $timestamps = false;

}