<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleDetail extends Model
{
    use HasFactory;

    protected $table = "article_data_sections";

    protected $fillable = [
        'article_id',
        'parent_id',
        'type',
        'content'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
