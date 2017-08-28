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
        return $course;
    }
}
