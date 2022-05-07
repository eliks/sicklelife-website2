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
Route::get('/album/{id}/{slug?}', 'App\Http\Controllers\HomeController@albumShow')->name('album.show');
Route::get('/gallerydetails', 'App\Http\Controllers\HomeController@gallerydetails')->name('gallerydetails');
Route::get('/events', 'App\Http\Controllers\HomeController@events')->name('events');
Route::get('/events/{id}/{slug?}', 'App\Http\Controllers\HomeController@eventShow')->name('events.show');
Route::get('/blog/{id}/{slug?}', 'App\Http\Controllers\HomeController@blogShow')->name('blog.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes(['register' => false]);

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    Route::post('/album/{album}/add_image', 'App\Http\Controllers\DashAlbumController@addImage')->name('dashboard.album.add_image');
    Route::post('/album/{album}/remove_image', 'App\Http\Controllers\DashAlbumController@removeImage')->name('dashboard.album.remove_image');
    Route::post('/basket/{basket}/add_album', 'App\Http\Controllers\DashBasketController@addAlbum')->name('dashboard.basket.add_album');
    Route::resource('blog', App\Http\Controllers\DashBlogController::class, ["as" =>"dashboard"]);
    Route::resource('user', App\Http\Controllers\DashUserController::class, ["as" =>"dashboard"]);
    Route::resource('image', App\Http\Controllers\DashImageController::class, ["as" =>"dashboard"]);
    Route::resource('album', App\Http\Controllers\DashAlbumController::class, ["as" =>"dashboard"]);
    Route::resource('basket', App\Http\Controllers\DashBasketController::class, ["as" =>"dashboard"]);
    Route::resource('teammember', App\Http\Controllers\DashTeammemberController::class, ["as" =>"dashboard"]);
});
