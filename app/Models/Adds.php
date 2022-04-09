<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adds extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'url',
        'image',
        'description',
        'start_date',
        'end_date',
        'is_active',
        'created_by'
    ];
}
