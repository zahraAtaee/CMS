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
*/
Route::get('/',function (){

    event(new \App\Events\UserActivation(\App\User::find(2)));

});
Route::namespace('Admin')->prefix('admin')->group(function (){


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

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
