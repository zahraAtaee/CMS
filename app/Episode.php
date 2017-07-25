<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use Sluggable;

    protected $fillable=['title','type','description','time','videoUrl','number','tags','course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function path()
    {
        return "/courses/{$this->course->slug}/episode/{$this->number}";
    }

}
