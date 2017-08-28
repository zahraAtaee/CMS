<?php

namespace App\Http\Controllers;

use App\Article;
use App\Course;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Seo or SEOMeta ...

        SEO::setTitle('وب سایت فروشگاهی');
        SEO::setDescription('فروش-آموزش مجازی-دوره های تخصصی');

        cache::store('file')->put('name','zahra Ataee',Carbon::now()->addMinute(2));




        if (cache::has('articles')){
            $articles=cache('articles');
        }
        else
        {
            $articles=Article::latest()->take(8)->get();
            cache::put('articles',$articles,Carbon::now()->addMinute(1));
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
//        return ($articles);
        return view('Home.index', compact('articles','courses'));
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
