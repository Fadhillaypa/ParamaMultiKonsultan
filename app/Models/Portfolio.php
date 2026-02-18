<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'client',
        'location',
        'year',
        'service_type',
        'description',
        'thumbnail',
    ];
}
