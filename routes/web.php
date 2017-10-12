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

Route::get('/' , array('as' => 'index', 'uses' => 'HomeController@index'));
Route::get('/articles' , 'ArticleController@index');
Route::get('/courses' , 'CourseController@index');
Route::get('/articles/{articleSlug}' , 'ArticleController@single');
Route::get('/courses/{courseSlug}' , 'CourseController@single');
Route::post('/comment' , 'HomeController@comment');
Route::get('/user/active/email/{token}' , 'UserController@activation')->name('activation.account');
Route::get('/sitemap' , 'SitemapController@index');
Route::get('/sitemap-articles' , 'SitemapController@articles');
Route::get('/feed/articles','FeedController@articles');

Route::get('telegram','TelegramController@telegram');
Route::post('/396603472:AAGLckyApu-oMnURzd59DgNXbsCqFhgPjHA/webhook' , 'TelegramController@webhook');

Route::group(['middleware' => 'auth:web'] , function () {
    $this->post('/course/payment' , 'PaymentController@payment')->name('payment.course');
    $this->get('/course/payment/checker' , 'PaymentController@checker');
});

Route::group(['namespace' => 'Admin' , 'middleware' => ['auth:web','checkAdmin'], 'prefix' => 'admin'],function (){
    $this->get('/panel' , 'PanelController@index')->name('admin.panel');
    $this->post('/panel/upload-image' , 'PanelController@uploadImageSubject');
    $this->resource('articles' , 'ArticleController');
    $this->resource('courses' , 'CoursesController');

    // Comment Section
    $this->get('comments/unsuccessful' , 'CommentController@unsuccessful')->name('comments.unsuccessfull');
    $this->resource('comments' , 'CommentController');

    // Payment Section
    $this->get('payments/unsuccessful' , 'PaymentController@unsuccessful')->name('payment.unsuccessfull');
    $this->resource('payments' , 'PaymentController');

    $this->resource('episodes' , 'EpisodeController');
    $this->resource('roles' , 'RoleController');
    $this->resource('permissions' , 'PermissionController');


    $this->resource('users','UserController');
/*        $this->get('/' , 'UserController@index')->name('user.all');*/
//    $this->resource('users/level','LevelManageController');
    $this->resource('user/level','LevelManageController', ['parameters' => ['level' => 'user']]);
        /*$this->put('/{user}/edit' , 'UserController@edit')->name('users.edit');
        $this->post('/create' , 'UserController@create')->name('users.create');
        $this->delete('/{user}/destroy' , 'UserController@destroy')->name('users.destroy');*/

});

Route::group(['namespace' => 'Auth'] , function (){
    // Authentication Routes...
    $this->get('login', 'LoginController@showLoginForm')->name('login');
    $this->post('login', 'LoginController@login');
    $this->get('logout', 'LoginController@logout')->name('logout');

    // Login And Register With Google
    $this->get('login/google', 'LoginController@redirectToProvider');
    $this->get('login/google/callback', 'LoginController@handleProviderCallback');
    // Registration Routes...
    $this->get('register', 'RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'ResetPasswordController@reset');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('language', function ()
{
    app()->setLocale('en');
    return redirect('/'.app()->getLocale());

})->name('language');