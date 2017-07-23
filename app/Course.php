<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 * @package App
 */
class Course extends Model
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


//    protected $guarded=[];

    /**
     * @var array
     */
    protected $casts=[
        'images'=>'array'
    ];

    public function path()
    {
        return "/course/$this->slug";
    }


    /**
     * @var array
     */


    protected $fillable=['title','type','description','body','price',
       'tags','images'];


    public function setBodyAttribute($value)
    {
        $this->attributes['description']=str_limit(preg_replace('/<[^>]*>/','',$value),200);
        $this->attributes['body']=$value;
    }
}
