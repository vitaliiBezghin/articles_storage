<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleDetailRequest;
use App\Models\Article;
use App\Models\ArticleDetail;
use Illuminate\Http\Request;

class ArticleDetailController extends Controller
{
    public function store(ArticleDetailRequest $request)
    {
       return response()->json([
         ArticleDetail::create($request->all())
       ]);
    }

    public function update(Request $request)
    {

    }
}
