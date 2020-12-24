<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'museum_histories';
    protected $primaryKey = 'id';
    public $timestamps = false;

}

