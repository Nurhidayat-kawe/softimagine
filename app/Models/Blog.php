<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug', 'title', 'category', 'image', 'excerpt', 'content', 'author', 'date', 'read_time',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }
}
