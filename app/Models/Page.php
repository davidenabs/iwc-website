<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'keyword',
        'content',
        'add_to_nav',
    ];

    protected $casts = [
        'add_to_nav' => 'boolean',
    ];
}
