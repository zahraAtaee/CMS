<?php

namespace App\Policies;

use App\User;
use App\article;
use Illuminate\Auth\Access\HandlesAuthorization;

class articlePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the article.
     *
     * @param  \App\User  $user
     * @param  \App\article  $article
     * @return mixed
     */
    public function view(User $user, article $article)
    {
        if ($user->id==$article->user_id){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create articles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the article.
     *
     * @param  \App\User  $user
     * @param  \App\article  $article
     * @return mixed
     */
    public function update(User $user, article $article)
    {
        //
    }

    /**
     * Determine whether the user can delete the article.
     *
     * @param  \App\User  $user
     * @param  \App\article  $article
     * @return mixed
     */
    public function delete(User $user, article $article)
    {
        //
    }
}
