<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidateAdminUser;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::prefix('admin')->group(function() {
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
        ValidateAdminUser::class
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    //overwrites default jetstreampath
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile.show');
});
