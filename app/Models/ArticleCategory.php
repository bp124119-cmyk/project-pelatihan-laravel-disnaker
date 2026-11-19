<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = 'article_categories';

    protected $fillable = [
        'articles_category_name',
    ];

    public function getCategory()
    {
        return $this->with('articles')->get();
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'articles_category_id');
    }
}