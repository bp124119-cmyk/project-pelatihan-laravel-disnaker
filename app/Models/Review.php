<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'review_name',
        'review_position',
        'review_content',
        'is_visible',
    ];

    protected function casts(): array
    {
        return ['is_visible' => 'boolean'];
    }
}