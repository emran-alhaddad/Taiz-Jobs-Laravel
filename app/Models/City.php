<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'is_active',
        'created_by'
    ];

    public function job(){
        return $this->hasMany(Job::class);
    }
}
