<?php

namespace App\Http\Controllers\Api\v1;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function articles()
    {
        $article=Article::latest()->get();

        response(['data'=>$article,'status'=>200],200);

    }
}
