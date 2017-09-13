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
        $local=app()->getLocale();
        return "/$local/articles/$this->slug";
    }

    protected $fillable=[
        'title','description','body','images','tags','lang'
    ];


    protected $hidden=[
        'slug'
    ];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
