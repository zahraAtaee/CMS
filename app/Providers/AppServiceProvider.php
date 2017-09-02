<?php

namespace App\Providers;

use App\Comment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Providers\Validation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Validator::extend('recaptcha',Validation\Recaptcha::class);

        view()->composer('Admin.section.header',function($view){

            $successful=Comment::where('approved',1)->count();
            $unsuccessful=Comment::where('approved',0)->count();
            $view->with(['successful'=>$successful,'unsuccessful'=>$unsuccessful]);
        });



    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
