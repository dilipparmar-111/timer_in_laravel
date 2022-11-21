<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'desc',
        'image',
        'status',
        'start_time',
        'end_time',
    ];
}
