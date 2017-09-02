<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Redis;

class CourseController extends Controller
{
    public function single(Course $course)
    {
        Redis::incr("views.{$course->id}.courses");
        $comments=$course->comments()->where('approved',1)->where('parent_id',0)->latest()
            ->with(['comments'=>function($query){
                $query->approved=1;
            }])->get();
        return view('Home.courses',compact('course','comments'));
    }


}
