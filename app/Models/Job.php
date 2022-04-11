<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'image',
        'description',
        'is_active',
        'created_by',
        'nature',
        'salary',
        'start_date',
        'end_date',
        'company_id',
        'category_id',
        'city_id'
    ];

}
