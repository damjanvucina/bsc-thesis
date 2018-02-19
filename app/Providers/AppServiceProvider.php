<?php

namespace App\Providers;

use App\Job;
use App\Language;
use App\Skill;
use App\Town;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.sidebar', function($view){
            $view->with('archivesStart', Job::archivesStart());
            $view->with('archivesCreate', Job::archivesCreate());
            $view->with('languages', Language::pluck('name'));
            $view->with('skills', Skill::pluck('name'));
            $view->with('towns', Town::pluck('id'));

        });

        view()->composer('jobs.sidebar', function($view){
            $view->with('archivesStart', Job::archivesStart());
            $view->with('archivesCreate', Job::archivesCreate());;
            $view->with('languages', Language::pluck('name'));
            $view->with('skills', Skill::pluck('name'));
            $view->with('towns', Town::pluck('id'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
