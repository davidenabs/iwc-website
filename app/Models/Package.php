<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'benefits', 'link', 'active', 'slug',
    ];

    protected $casts = [
        'status' => 'boolean',
        'benefits' => 'array'
    ];
}
