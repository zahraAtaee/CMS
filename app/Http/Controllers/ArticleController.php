<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Redis;

class ArticleController extends Controller
{
    public function single(Article $article)
    {
//        $article->increment('viewCount'); --insert count view in db

        Redis::incr("views.{$article->id}.articles"); //insert count view in Redis
        return $article;
    }
}
