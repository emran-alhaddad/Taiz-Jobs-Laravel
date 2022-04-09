<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partener extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'image',
        'url',
        'is_active',
        'created_by'
    ];
}
