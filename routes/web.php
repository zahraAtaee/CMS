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
Route::group(['middelware'=>'web'],function (){

    $this->get('/','HomeController@index');
    $this->get('/articles/{articleSlug}','ArticleController@single');
    $this->get('/courses/{courseSlug}','CourseController@single');
    $this->post('/comment','HomeController@comment');
    $this->get('/user/active/email/{token}','Admin\UserController@activation')->name('activation.account');
});

Route::group(['namespace'=>'Admin','prefix'=>'admin'],function (){

    $this->get('/panel','PanelController@index')->name('PanelAdmin');
    $this->post('/panel/upload-image','PanelController@uploadImageSubject')->name('uploadImage');
    $this->resource('articles','ArticleController');
    $this->resource('courses','CoursesController');
    $this->resource('episodes','EpisodeController');
    $this->resource('roles','RoleController');
    $this->resource('permissions','PermissionController');



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

