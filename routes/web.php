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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index');
Route::get('/contact-us', 'App\Http\Controllers\HomeController@contactus')->name('contactus');
Route::get('/make-a-donation', 'App\Http\Controllers\HomeController@makeadonation')->name('makeadonation');
Route::get('/join-as-volunteer', 'App\Http\Controllers\HomeController@joinasvolunteer')->name('joinasvolunteer');
Route::get('/about-us', 'App\Http\Controllers\HomeController@aboutus')->name('aboutus');
Route::get('/our-team', 'App\Http\Controllers\HomeController@team')->name('team');
Route::get('/our-work', 'App\Http\Controllers\HomeController@ourwork')->name('ourwork');
Route::get('/news', 'App\Http\Controllers\HomeController@news')->name('news');
Route::get('/blog', 'App\Http\Controllers\HomeController@blog')->name('blog');
Route::get('/gallery', 'App\Http\Controllers\HomeController@gallery')->name('gallery');
Route::get('/gallerydetails', 'App\Http\Controllers\HomeController@gallerydetails')->name('gallerydetails');
Route::get('/events', 'App\Http\Controllers\HomeController@events')->name('events');
Route::get('/events/{id}/{slug?}', 'App\Http\Controllers\HomeController@eventShow')->name('events.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
