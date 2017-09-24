<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'user_id',
        'parent_id',
        'comment',
        'approved',
        'commentable_id',
        'commentable_type',
    ];
    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
//        return $this->hasMany(Comment::class,'parent_id','id')->where('approved',1);
        return $this->hasMany(Comment::class,'parent_id','id');
    }

    public function setCommentAttribute($value)
    {
        return $this->attributes['comment']=str_replace(PHP_EOL,"</br>",$value);
    }

    public function ScopeApproved($query,$approved)
    {
       return $query->selectRaw('*')
            ->whereApproved($approved)
            ->latest()
           ->paginate(5);
    }
}
