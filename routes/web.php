<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    $job = Job::first();

    TranslateJob::dispatch($job);

    return 'Done';
});

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');

// Jobs
Route::get('/jobs', [JobController::class, 'index'])
    ->name('jobs.index');

Route::get('/jobs/create', [JobController::class, 'create'])
    ->name('jobs.create')
    ->middleware('auth');

Route::post('/jobs', [JobController::class, 'store'])
    ->name('jobs.store')
    ->middleware('auth');

Route::get('/jobs/{job}', [JobController::class, 'show'])
    ->name('jobs.show');

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->name('jobs-job.edit')
    ->middleware('auth')
    ->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update'])
    ->name('jobs-job.update')
    ->middleware('auth')
    ->can('update', 'job');

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])
    ->name('jobs-job.destroy')
    ->middleware('auth')
    ->can('delete', 'job');


// auth
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register.create');
Route::post('/register', [RegisteredUserController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionController::class, 'create'])
    ->name('login');
Route::post('/login', [SessionController::class, 'store'])
    ->name('login.store');

Route::delete('/logout', [SessionController::class, 'destroy'])
    ->name('logout');
