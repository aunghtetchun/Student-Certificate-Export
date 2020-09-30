<?php

namespace App\Providers;

use App\Batch;
use App\Course;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share("courseList",Course::latest()->get());
        View::share("batchList",Batch::latest()->get());
    }
}
