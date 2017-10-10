<?php
/**
 * Created by PhpStorm.
 * User: ZAtaee
 * Date: 8/13/2017
 * Time: 2:01 PM
 */

namespace App;


trait HasRole
{

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {

         if(is_string($role)){
             return $this->roles->contains('name',$role);
         }
//        dd($this->roles);
        /*foreach ($role as $r)
         {
             if($this->hasRole($r->name)){
                 return true;
             }
         }*/
        return !! $role->intersect($this->roles)->count();
    }

    public function isAdmin()
    {
         return $this->level == 'admin' ? true : false;
    }
}