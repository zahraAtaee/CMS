<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap=app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.articles',60);

        if(! $sitemap->isCached()){

            $articles=Article::latest()->get();
            foreach ($articles as $article)
            {
                $sitemap->addSitemap(url()->to($article->path()));
            }


        }

        return $sitemap->render('sitemapindex');
    }

    public function articles()
    {

    }
}
