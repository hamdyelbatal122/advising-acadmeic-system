<?php

use App\Http\Controllers\Admin\AdvisingController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MarksController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RolesContoller;
use App\Http\Controllers\Admin\StudentsContoller;
use App\Http\Controllers\Admin\UsersContoller;
use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'admin'], function () {

//  Route::group([ 'domain' => 'administrator.'.env('APP_URL') ,'prefix'=>'/' ],function () {


    Route::get('/', function () {return redirect()->route('admin.login');});

    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('login/submit', [LoginController::class, 'login'])->name('admin.login.post');
        Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
    });


    Route::group(['middleware' => 'auth:admin','prefix' => 'dashboard'], function () {

        Route::get('/', [HomeController::class, 'index'])->name('admin.dashboard');

        Route::group(['prefix' => 'profile',], function () {
            Route::get('/index',  [ProfileController::class, 'index'])->name('admin.profile.index');
            Route::get('/password',  [ProfileController::class, 'password'])->name('admin.profile.password');
            Route::post('/password/edit',  [ProfileController::class, 'Uupdate'])->name('admin.password.update');
        });

        
        Route::group(['prefix' => 'users'], function () {
            Route::get('index', [UsersContoller::class, 'index'])->name('admin.users.index');
            Route::get('create', [UsersContoller::class, 'create'])->name('admin.users.create');  
            Route::post('store', [UsersContoller::class, 'store'])->name('admin.users.store');
            Route::get('edit/{id}', [UsersContoller::class, 'edit'])->name('admin.users.edit');
            Route::post('update', [UsersContoller::class, 'update'])->name('admin.users.update');
            Route::post('delete', [UsersContoller::class, 'delete'])->name('admin.users.delete');
        });


        Route::group(['prefix' => 'students'], function () {
            Route::get('index', [StudentsContoller::class, 'index'])->name('admin.students.index');
            Route::get('create', [StudentsContoller::class, 'create'])->name('admin.students.create');  
            Route::post('store', [StudentsContoller::class, 'store'])->name('admin.students.store');
            Route::get('edit/{id}', [StudentsContoller::class, 'edit'])->name('admin.students.edit');
            Route::get('view/{id}', [StudentsContoller::class, 'view'])->name('admin.students.view');
            Route::post('update', [StudentsContoller::class, 'update'])->name('admin.students.update');
            Route::post('delete', [StudentsContoller::class, 'delete'])->name('admin.students.delete');
            Route::get('admission/form/view/{id}', [StudentsContoller::class, 'viewAdmissionForm'])->name('admin.students.admission.prinit');
        });

        Route::group(['prefix' => 'courses'], function () {
            Route::get('index', [CoursesController::class, 'index'])->name('admin.courses.index');
            Route::get('create', [CoursesController::class, 'create'])->name('admin.courses.create');  
            Route::post('store', [CoursesController::class, 'store'])->name('admin.courses.store');
            Route::get('edit/{id}', [CoursesController::class, 'edit'])->name('admin.courses.edit');
            Route::post('update', [CoursesController::class, 'update'])->name('admin.courses.update');
            Route::post('delete', [CoursesController::class, 'delete'])->name('admin.courses.delete');
        });

        Route::group(['prefix' => 'advising'], function () {
            Route::get('index/{level?}', [AdvisingController::class, 'index'])->name('admin.advising.index');
            Route::get('create', [AdvisingController::class, 'create'])->name('admin.advising.create');  
            Route::post('store', [AdvisingController::class, 'store'])->name('admin.advising.store');
            Route::get('student', [AdvisingController::class, 'getDataByStudent'])->name('admin.advising.student.data');
            Route::get('edit/{id}', [AdvisingController::class, 'edit'])->name('admin.advising.edit');
            Route::post('update', [AdvisingController::class, 'update'])->name('admin.advising.update');
            Route::post('delete', [AdvisingController::class, 'delete'])->name('admin.advising.delete');
            Route::get('show/{id}', [AdvisingController::class, 'show'])->name('admin.advising.show');
        });

        Route::group(['prefix' => 'marks'], function () {
            Route::get('index/{level?}', [MarksController::class, 'index'])->name('admin.marks.index');
            Route::get('create', [MarksController::class, 'create'])->name('admin.marks.create');
            Route::post('store', [MarksController::class, 'store'])->name('admin.marks.store');
            Route::get('student', [MarksController::class, 'getDataByStudent'])->name('admin.marks.student.data');
            Route::get('view/{id}', [MarksController::class, 'view'])->name('admin.marks.show');
            Route::get('edit/{id}', [MarksController::class, 'edit'])->name('admin.marks.edit');
            Route::post('update', [MarksController::class, 'update'])->name('admin.marks.update');

        });


        Route::group(['prefix' => 'notices'], function () {
            Route::get('index', [NoticeController::class, 'index'])->name('admin.notices.index');
            Route::get('create', [NoticeController::class, 'create'])->name('admin.notices.create');
            Route::post('store', [NoticeController::class, 'store'])->name('admin.notices.store');
            Route::get('show/{id}', [NoticeController::class, 'show'])->name('admin.notices.show');
            Route::get('reply/{id}', [NoticeController::class, 'reply'])->name('admin.notices.reply');
            Route::post('send', [NoticeController::class, 'send'])->name('admin.notices.send');
            Route::post('delete', [NoticeController::class, 'delete'])->name('admin.notices.delete');
        });

        Route::group(['prefix' => 'roles'], function () {
            Route::get('index', [RolesContoller::class, 'index'])->name('admin.roles.index');
            Route::get('create', [RolesContoller::class, 'create'])->name('admin.roles.create');
            Route::post('store', [RolesContoller::class, 'store'])->name('admin.roles.store');
            Route::get('edit/{id}', [RolesContoller::class, 'edit'])->name('admin.roles.edit');
            Route::post('update', [RolesContoller::class, 'update'])->name('admin.roles.update');
            Route::post('delete', [RolesContoller::class, 'delete'])->name('admin.roles.delete');
        });



    });



});


