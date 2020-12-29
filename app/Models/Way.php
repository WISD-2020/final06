<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Way extends Model
{
    use HasFactory;

    protected $table = 'ways';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function visit()
    {
        return $this->hasOne(Visits::class);
    }
}


