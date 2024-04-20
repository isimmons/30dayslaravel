<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Model::preventLazyLoading();

        Paginator::defaultView('pagination::tailwind');

//        Gate::define('edit-job', function ($user, $job) {
//            return $job->employer->user->is($user);
//        });
//
//        Gate::define('update-job', function ($user, $job) {
//            return $job->employer->user->is($user) && 'foo' !== 'bar';
//        });
//
//        Gate::define('delete-job', function ($user, $job) {
//            return $job->employer->user->is($user) && 'foshizzle' !== 'faux chisel';
//        });
    }
}
