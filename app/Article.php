<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $casts=[
        'images'=>'array'
    ];

    public function path()
    {
        return "/articles/$this->slug";
    }

    protected $fillable=[
        'title','description','body','images','tags'
    ];


    protected $hidden=[
        'slug'
    ];
}
