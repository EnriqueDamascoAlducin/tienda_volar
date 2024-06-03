<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidateAdminUser;
use App\Livewire\Users;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

Route::get('/', function () {
    return view('store.home');
})->name('home');

Route::get('/quienes-somos', function () {
    return view('store.pages.about');
})->name('about');

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
        Route::get('/usuarios', Users::class)->name('users');

        /** Products */
    });

    //overwrites default jetstream path
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile.show');
});
