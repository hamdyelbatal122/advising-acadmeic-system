<?php

;

use App\Http\Controllers\Site\HomeContoller;
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

Route::group(['prefix' => '/'], function () {

    Route::get('/', [HomeContoller::class, 'home'])->name('site.home');
    Route::get('/contact', [HomeContoller::class, 'contact'])->name('site.contact');
    Route::get('/about', [HomeContoller::class, 'about'])->name('site.about');
    Route::get('/professors', [HomeContoller::class, 'professors'])->name('site.professors');
    Route::get('/events', [HomeContoller::class, 'events'])->name('site.events');
    Route::get('/gallery', [HomeContoller::class, 'gallery'])->name('site.gallery');
    Route::get('/blog', [HomeContoller::class, 'blog'])->name('site.blog');
    Route::get('/advising', [HomeContoller::class, 'advising'])->name('site.advising');
    

    



});


