<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'articles_category_id',
        'articles_slug',
        'articles_name',
        'articles_desc',
    ];

    public function getArticle()
    {
        return $this->with('category')->get();
    }

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'articles_category_id');
    }
}