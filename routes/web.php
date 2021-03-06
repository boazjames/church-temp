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

Route::get('/','SermonController@limit3');

Route::get('sermons','SermonController@index');

Route::get('videos','VideoController@index');

Route::get('videos/{id}','VideoController@single');

Route::post('videos','VideoController@search');

Route::post('search','SermonController@search');

Route::get('{id}sermon','SermonController@show');

Route::get('admin_church','SessionsController@index')->name('signin');

Route::post('message','MessageController@store');

Route::get('admin_church/logout','SessionsController@logout');

Auth::routes();

Route::get('admin_church/reset-password-email','PasswordController@email');

Route::get('admin_church/reset-password','PasswordController@reset');

Route::post('login','SessionsController@login');

Route::post('admin_church/video','HomeController@storeVideo');

Route::post('admin_church/edit-video','HomeController@editVideo');

Route::get('admin_church/{id}edit-video','HomeController@videoValue');

Route::post('admin_church/delete-video','HomeController@deleteVideo');

Route::post('admin_church/time','HomeController@setTime');

Route::post('admin_church/delete-time','HomeController@unsetTime');

Route::post('admin_church/edit-time','HomeController@editTime');

Route::get('admin_church/{id}edit-time','HomeController@timeValue');

Route::post('admin_church/admin','HomeController@addAdmin');

Route::post('admin_church/delete-admin','HomeController@deleteAdmin');

Route::post('admin_church/filt-admin','HomeController@filtAdmin');

Route::get('admin_church/edit-profile','HomeController@adminDetails');

Route::post('admin_church/edit-profile','HomeController@editAdmin');

Route::post('admin_church/edit-profile-photo','HomeController@editPhoto');

Route::get('admin_church/home', 'HomeController@index');

Route::get('admin_church/sermon', 'HomeController@sermon');

Route::get('admin_church/video', 'HomeController@video');

Route::get('admin_church/time', 'HomeController@time');

Route::get('admin_church/admin', 'HomeController@admin');


Route::group(['middleware' => 'auth'], function () {
    Route::post('admin_church/post','SermonController@store');

    Route::post('admin_church/delete-sermon','SermonController@delete');

    Route::get('admin_church/{id}edit-sermon','SermonController@value');

    Route::get('admin_church/add-sermon','SermonController@addSermon');

    Route::post('admin_church/edit-sermon','SermonController@edit');

    Route::post('admin_church/filt-sermon','SermonController@filter');


    Route::get('admin_church/messages', 'MessageController@index');

    Route::get('admin_church/messages-unread', 'MessageController@showUnread');

    Route::get('admin_church/messages-read', 'MessageController@showRead');

    Route::get('admin_church/{id}message', 'MessageController@showMessage');

    Route::post('admin_church/send-message', 'MessageController@sendMessage');


    Route::get('admin_church/change-password','PasswordController@change');

    Route::post('admin_church/change-password','PasswordController@changePassword');

});