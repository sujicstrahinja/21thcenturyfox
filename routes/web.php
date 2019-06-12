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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::resource('user', 'admin\UserController')->name('index', 'admin/user');
    Route::resource('role', 'admin\RoleController');
    Route::resource('subscription', 'admin\SubscriptionController');
    Route::resource('message', 'admin\MessageController');
    Route::resource('link', 'admin\LinkController');
    Route::resource('movie', 'admin\MovieController');
    Route::resource('genre', 'admin\GenreController');
});

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/single/{id}', 'FrontendController@show')->name('single');

Route::get('movies', 'FrontendController@movies')->name('movies');
Route::get('search/{name?}', "FrontendController@search")->name('search');

Route::get('contact', 'FrontendController@contact')->name('contact');
Route::get('about_me', 'FrontendController@about_me')->name('about_me');

Route::post('register', 'RegistrationController@store')->name('register');

Route::post('login', 'SessionsController@store')->name('login');
Route::get('logout', 'SessionsController@destroy')->name('logout');