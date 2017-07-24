<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable=['title','type','description','body','videoUrl','number','tags'];

    protected $casts=['images'=>'array'];


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
        return "/episode/$this->slug";
    }

}
