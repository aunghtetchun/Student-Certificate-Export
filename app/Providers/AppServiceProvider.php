<?php

namespace App\Providers;

use App\Access;
use App\Batch;
use App\Certificate;
use App\Course;
use App\Entry;
use App\User;
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
        View::share("studentList",User::where("role","1")->get());
        View::share("accessList",Access::latest()->get());
        View::share("entryList",Entry::latest()->get());
        View::share("certificateList",Certificate::latest()->get());

    }
}
