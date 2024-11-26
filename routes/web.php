<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegistorUserController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

// Welcome page
Route::view('/', 'welcome');

// Job-related routes
Route::middleware('auth')->group(function () {
    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/job/{job}', [JobController::class, 'show']);
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->can('edit','job');
    Route::patch('/jobs/{job}', [JobController::class, 'update']);
    Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
});
Route::get('/jobs', [JobController::class, 'index']);

Route::get('/job/{job}', [JobController::class, 'show']);

// Contact page
Route::view('/contact', 'contact');

// User registration and session management
Route::get('/register', [RegistorUserController::class, 'create']);
Route::post('/register', [RegistorUserController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

