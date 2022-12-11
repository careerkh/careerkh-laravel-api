<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'href',
        'industry',
        'description',
        'caption',
        'term',
        'location',
        'salary',
        'date',
        'imageUrl',
    ];
}