<?php

namespace App\Providers;

use App\Article;
use App\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\Article::class => \App\Policies\articlePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        foreach ($this->getPermission() as $permission) {

            Gate::define($permission->name,function ($user) use($permission){

                return $user->hasRole($permission->roles);
            });

        }

        Passport::routes();
    }

    protected function getPermission()
    {
        return Permission::with('roles')->get();
    }
}
