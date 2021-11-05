<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function article_category()
    {
        return $this->hasMany(ArticleCategory::class);
    }

    public function article_detail()
    {
        return $this->hasMany(ArticleDetail::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
