<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
HomeController@index
/*function (){
     $user=\App\User::find(4);
 event(new \App\Events\ArticleEvent($user));
   Redis::incr('visit');
     return Redis::get('visit');
}*/

Route::get('/','HomeController@index');
Route::get('/articles/{articleSlug}','ArticleController@single');
Route::get('/courses/{courseSlug}','CourseController@single');
Route::post('/comment','HomeController@comment');
Route::get('/user/active/email/{token}','Admin\UserController@activation')->name('activation.account');
Route::get('/sitemap','SitemapController@index')->name('sitemap');
Route::get('/sitemap-articles','SitemapController@articles')->name('sitemap-articles');
Route::get('/feed/articles','FeedController@article')->name('sitemap-articles');
Route::get('telegram','TelegramController@telegram')->name('telegram');
Route::post('/400053881:AAE8A8Z0amhX4qt2os7w4WFye1DfV1tnTxg/webhook','TelegramController@webhook');


Route::group(['middelware'=>'auth:web'],function (){

    $this->post('/course/payment','PaymentController@payment');
    $this->get('/course/payment/checker','PaymentController@checker');

});

Route::group(['namespace'=>'Admin','prefix'=>'admin'],function (){

    $this->get('/panel','PanelController@index')->name('PanelAdmin');
    $this->post('/panel/upload-image','PanelController@uploadImageSubject')->name('uploadImage');
    $this->resource('articles','ArticleController');
    $this->resource('courses','CoursesController');
    $this->resource('episodes','EpisodeController');
    $this->resource('roles','RoleController');
    $this->resource('permissions','PermissionController');

    //Comment Section
    $this->get('comments/unsuccessful','CommentController@unsuccessful')->name('comments.unsuccessfull');
    $this->resource('comments','CommentController');

    //Payment Section
    $this->get('payments/unsuccessful','PaymentController@unsuccessful')->name('payment.unsuccessfull');
    $this->resource('payments','PaymentController');


    $this->group(['prefix'=>'users'],function (){

        $this->get('/','UserController@index')->name('users');
        $this->post('/','UserController@create')->name('users.create');
        $this->put('/','UserController@edit')->name('users.edit');
        $this->delete('/{user}/destroy','UserController@destroy')->name('users.destroy');
        $this->resource('level','LevelManageController',['parameters'=>['level'=>'user']]);
    });

});

Route::group(['namespace'=>'Auth'],function (){

    // Authentication Routes...
    $this->get('login', 'LoginController@showLoginForm')->name('login');
    $this->post('login', 'LoginController@login');
    $this->get('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('register', 'RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'ResetPasswordController@reset');

    //Auth Google
    $this->get('login/google', 'LoginController@redirectToProvider');
    $this->get('login/google/callback', 'LoginController@handleProviderCallback');

});


Route::get('/home', 'HomeController@index')->name('home');

