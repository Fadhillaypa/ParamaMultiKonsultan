<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationActivity extends Model
{
    protected $fillable = [
        'consultation_id',
        'action',
        'description',
        'admin_id',
    ];
}
