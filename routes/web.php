<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AnnouncementController;
use Laravel\Fortify\Features;
use App\Http\Controllers\SubjectController;

//Route::get('/login', [PageController::class, 'login'])
//    ->name('login');
//Route::post('/login', [PageController::class, 'doLogin']);
if (Features::enabled(Features::registration())) {
    Route::get('/register', [PageController::class, 'userRegister'])
        ->name('register');
    Route::post('/register', [PageController::class, 'storeRegister']);
}


Route::get('/', [PageController::class, 'index'])->name('index');
