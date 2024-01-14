<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/auth/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/auth/logout', [AuthController::class, 'logout']);

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard.index');
        Route::get('/user', 'user')->name('dashboard.user');
    });

    Route::controller(UserController::class)->group(function () {
        Route::post('/user/add', 'store')->name('user.store');
    });
});
