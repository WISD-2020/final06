<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentator extends Model
{
    use HasFactory;

    protected $table = 'commentators';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function visit()
    {
        return $this->belongsTo(Visits::class);
    }
}

