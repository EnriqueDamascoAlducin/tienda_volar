<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidateAdminUser;
use App\Livewire\Users;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;


/** Store Pages  */
Route::get('/', function () {
    return view('store.home');
})->name('home');

Route::get('/quienes-somos', function () {
    return view('store.pages.about');
})->name('about');

/** Finish Store Pages */

Route::prefix('admin')->group(function() {
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
        ValidateAdminUser::class
    ])->group(function () {
        /*** DASHBOARD */
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        /** Users */

        /** Products */
    });

    Route::prefix('usuarios')->group(function() {
        Route::get('/', Users::class)->name('users');
        Route::get('/registrar', [UserController::class, 'register'])->name('user.register');
        Route::post('/save', [UserController::class, 'save'])->name('user.create');
    });

    //overwrites default jetstream path
    Route::get('/mi-perfil', [UserProfileController::class, 'show'])->name('profile.show');
});
