<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function article()
    {
        $feed=app()->make('feed');
        $feed->setCache(60, 'laravel.feed.article');

        if (! $feed->isCached())
        {
            $articles=Article::latest()->take(10)->get();

            foreach ($articles as $article)
            {
                $feed->add($article->title, $article->user->name, url($article->path()), $article->created_at, strip_tags($article->description),strip_tags($article->body));
            }
        }

        return $feed->render('rss');
    }
}
