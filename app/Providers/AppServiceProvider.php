<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\StudentRepositoryInterface;
use App\Repositories\Interfaces\TeacherRepositoryInterface;
use App\Repositories\StudentRepository;
use App\Repositories\TeacherRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
        $this->app->bind(TeacherRepositoryInterface::class, TeacherRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
