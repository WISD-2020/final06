<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    use HasFactory;

    protected $table = 'visits';

    protected $fillable = [
        'date',
        'period',
        'way_id',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function way()
    {
        return $this->belongsTo(Way::class);
    }
}

