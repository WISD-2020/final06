<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commentator;

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

    public function commentators()
    {
        return $this->hasMany(Commentator::class);
    }
}

