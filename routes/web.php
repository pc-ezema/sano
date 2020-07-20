<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faq' ,'homepageController@faq');
Route::get('/contact-us' , 'homepageController@contactUs');
Route::get("/about-us" , 'homepageController@aboutUs');
Route::get("/gallery" , "homepageController@gallery");
Route::get("/services" , "homepageController@services");
Route::get("/our-team" , "homepageController@ourTeam");

Route::post('/contact-us', 'homepageController@contactUsConfirm');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
