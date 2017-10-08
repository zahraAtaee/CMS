<?php

namespace App\Providers;

use App\Comment;
use App\Payment;
use App\User;
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

        view()->composer('Admin.section.sidebar',function($view){

            $commentSuccess  =Comment::where('approved',1)->count();
            $commentUnsuccess=Comment::where('approved',0)->count();

            $paymentSuccess  =Payment::wherePayment(1)->count();

            $paymentUnsuccess=Payment::wherePayment(0)->count();
            $view->with
            ([
                    'commentSuccess'     =>$commentSuccess,
                    'commentUnsuccess'   =>$commentUnsuccess,
                    'paymentSuccess'     =>$paymentSuccess,
                    'paymentUnsuccess'   =>$paymentUnsuccess,
            ]);
        });
        view()->composer('Admin.section.quickSidebar',function($view){

            $user  =User::whereActive(1)->get();
            $view->with
            ([
                    'user'     =>$user,
            ]);
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
