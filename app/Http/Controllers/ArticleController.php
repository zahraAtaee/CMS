<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Redis;
use App\Comment;

class ArticleController extends Controller
{
    public function single(Article $article)
    {
//        $article->increment('viewCount'); --insert count view in db

        Redis::incr("views.{$article->id}.articles"); //insert count view in Redis

        $comments=$article->comments()->where('approved',1)->where('parent_id',0)->latest()
            ->with(['comments'=>function($query){
                $query->approved=1;
            }])->get();

        return view('Home.article',compact('article','comments'));
    }


}
/* $CommentsChild = $article->comments()->withCount(['comments','comments AS pending_comments'=>function($query){
            $query->where('approved', false);
        }])->latest()->get();*/
