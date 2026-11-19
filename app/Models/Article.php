<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'articles_category_id',
        'article_title',
        'article_excerpt',
        'article_content',
        'article_image',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
        ];
    }

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'articles_category_id');
    }
}