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
   $user=\App\User::find(1);

   event(new \App\Events\UserRegistered($user));

   dd('eeeeeeee');
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

