<?php

namespace App\Providers;

use App\Models\Admin;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('dashboard.admin.layouts.app', function ($view) {
            $admin = Admin::find(auth('admin')->user()->id);
            $view->with('admin', $admin);
        });

        View::composer('dashboard.student.layouts.app', function ($view) {
            $student = auth('student')->user();
            $view->with('student', $student);
        });


    }
}
