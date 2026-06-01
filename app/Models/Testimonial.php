<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'role', 'company', 'initials', 'rating', 'quote',
    ];

    protected function casts(): array
    {
        return [
            'rating' => 'integer',
        ];
    }
}
