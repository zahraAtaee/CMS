<?php
/**
 * Created by PhpStorm.
 * User: raha
 * Date: 10/16/2017
 * Time: 8:59 AM
 */

namespace App\Http\Controllers;


use App\Comment;

trait command
{
    public function commentsActive()
    {
//        $commentsActive=Comment::Approved(true);
        $commentsActive=Comment::all();
        return $commentsActive;
    }

    public function commentsDeActive()
    {
        $commentsDeActive=Comment::Approved(false);
        return $commentsDeActive;
    }
}