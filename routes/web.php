<?php

use App\Http\Controllers\Student\Auth\LoginController;
use App\Http\Controllers\Student\HomeController;
use App\Http\Controllers\Student\NoticeController;
use App\Http\Controllers\Student\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {return redirect()->route('student.login');});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('student.login');
    Route::post('login/submit', [LoginController::class, 'login'])->name('student.login.post');
    Route::post('logout', [LoginController::class, 'logout'])->name('student.logout');
});


Route::group(['prefix' => 'dashboard','middleware' => 'auth:student'], function () {

    Route::get('/', [HomeController::class, 'index'])->name('student.home');



    Route::group(['prefix' => 'profile',], function () {
        Route::get('/index',  [ProfileController::class, 'index'])->name('student.profile.index');
        Route::get('/password',  [ProfileController::class, 'password'])->name('student.profile.password');
        Route::post('/password/edit',  [ProfileController::class, 'Uupdate'])->name('students.password.update');
    });

    Route::group(['prefix' => 'academic',], function () {
        Route::get('advising/{id}', [HomeController::class, 'PrintAdvising'])->name('student.advising.print');
        Route::get('admission/form/view', [HomeController::class, 'viewAdmissionForm'])->name('student.admission.prinit');

    });

    Route::group(['prefix' => 'notices',], function () {
        Route::get('index', [NoticeController::class, 'index'])->name('student.notices.index');
        Route::get('create', [NoticeController::class, 'create'])->name('student.notices.create');
        Route::post('store', [NoticeController::class, 'store'])->name('student.notices.store');
        Route::get('show/{id}', [NoticeController::class, 'show'])->name('student.notices.show');
        Route::get('reply/{id}', [NoticeController::class, 'reply'])->name('student.notices.reply');
        Route::post('send', [NoticeController::class, 'send'])->name('student.notices.send');

    });


    Route::group(['prefix' => 'courses',], function () {
        Route::get('index', [HomeController::class, 'courses'])->name('student.courses.index');
        Route::get('routine', [HomeController::class, 'routine'])->name('student.courses.routine');

    });


});










require __DIR__.'/admin.php';
require __DIR__.'/site.php';
