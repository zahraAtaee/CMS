<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activation_code extends Model
{
    protected $fillable=['user_id','code','used','expire'];
}
