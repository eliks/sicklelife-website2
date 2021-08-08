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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/contact-us', 'HomeController@contactus')->name('contactus');
Route::get('/about-us', 'HomeController@aboutus')->name('aboutus');
Route::get('/our-work', 'HomeController@ourwork')->name('ourwork');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/blog', 'HomeController@blog')->name('blog');
