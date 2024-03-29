<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperatures extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'temperature',
        'recorded_at',
    ];
}
