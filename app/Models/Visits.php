<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    use HasFactory;

    protected $table = 'visits';

    protected $fillable = [
//        'people_id',
        'date',
        'period',
        'way_id',
    ];

    public $timestamps = false;

    protected $casts = [
//        'people_id' => 'integer',
        'date' => 'date',
        'period' => 'string',
        'way_id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
