<?php
/**
 * Created by PhpStorm.
 * User: ZAtaee
 * Date: 8/6/2017
 * Time: 3:36 PM
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