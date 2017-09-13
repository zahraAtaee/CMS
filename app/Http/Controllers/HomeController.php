<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\Course;
use App\Http\Requests\CommentRequest;
use SEO;//or use SEOMETA
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Seo or SEOMeta ...
//        app()->setLocale('en');
        $local=app()->getLocale();

        SEO::setTitle(__('messages.title'));
        SEO::setDescription('فروش-آموزش مجازی-دوره های تخصصی');

        cache::store('file')->put('name','zahra Ataee',Carbon::now()->addMinute(2));


        if (cache::has("articles.$local")){
            $articles=cache("articles.$local");
        }
        else
        {
            $articles=Article::whereLang($local)->latest()->take(8)->get();
            cache::put("articles.$local",$articles,Carbon::now()->addMinute(1));
        }

        if (cache::has('courses'))
        {
            $courses=cache('courses');
        }
         else
        {
            $courses=Course::latest()->take(4)->get();
            cache::put('courses',$courses,Carbon::now()->addMinute(1));
        }
//        return ($articles);CommentRequest $request
        return view('Home.index', compact('articles','courses'));
    }

    public function comment(CommentRequest $request)
    {
//      Comment::create(array_merge([auth()->user->id],$request->all())); --- sampel insert to DB.
        auth()->user()->comments()->create($request->all());
        return back();

    }


    /*
         ---Remove Cache Drivers---

             return cache::store('file')->get('name');

             cache::flush();
             cache::pull('articles');
             cache::pull('courses');

        --- End Remove Cache --
    */
}
