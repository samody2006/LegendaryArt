<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Routes
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('homepage');
    Route::get('/gallery/{slug}', 'gallery')->name('gallery');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactForm')->name('message');
    Route::get('/service', 'service')->name('service');
});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::redirect('/register', '/login');
Route::redirect('/register', '/login')->name('register');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginShow')->name('login');
    Route::post('/login', 'loginStore');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/verify/{token}', 'verify')->name('verify');
    Route::get('/verify-again', 'verifyAgain')->name('verifyAgain');
    Route::post('/verify-again', 'resendVerification');

    // Password Reset
    Route::get('/password/reset', 'passwordResetToken')->name('passwordResetToken');
    Route::post('/password/reset', 'passwordResetTokenSend');
    Route::get('/password/reset/update/{token?}', 'passwordReset')->name('passwordReset');
    Route::post('/password/reset/update', 'passwordResetUpdate');
});

/*
|--------------------------------------------------------------------------
| Admin Routes (Protected)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::resources([
        'album' => AlbumController::class,
        'photo' => PhotoController::class,
        'team' => TeamController::class,
        'settings' => SettingController::class,
        'service' => ServiceController::class,
        'message' => MessageController::class,
        'contact-info' => ContactInfoController::class,
        'permission' => PermissionController::class,
        'role' => RoleController::class,
        'user' => UserController::class,
    ]);

    // User Profile
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::put('/profile', [UserController::class, 'profile_update'])->name('user.update');
});

// New User Password Setup
Route::get('/{token}/{id}', [UserController::class, 'newUserPassSet'])->name('new.user');
