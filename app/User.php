<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasRole,HasApiTokens,Sluggable ;

    protected $table = 'users';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','active','g-recaptcha-response','api_token','username','family','birthday','description','images','position'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','api_token'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'username'
            ]
        ];
    }

    public function path()
    {
        $local=app()->getLocale();
        return "/$local/register/$this->slug";
    }

    protected $casts=[
        'images'=>'array'
    ];

    public function activationCode()
    {
        return $this->hasMany(ActivationCode::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function article()
    {
        return $this->hasMany(Article::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function course()
    {
        return $this->hasMany(Course::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function payments()
    {

      return $this->hasMany(Payment::class);

    }

    public function checkLearning($course)
    {
        return Learning::where('user_id',$this->id)->where('course_id',$course->id)->count();
    }

    public function learnings()
    {
        return $this->hasMany(Learning::class);
    }
}
