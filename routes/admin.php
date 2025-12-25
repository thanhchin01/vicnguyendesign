<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DesignRequestController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;

// site Admin
//2. Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgotpassword', function () {
    return view('Admin.layouts.forgot-password');
});
Route::middleware(['auth:admin'])->group(function () {

    Route::get('/', function () {
        return view('admin.layouts.welcome');
    });
    Route::get('/profile', function () {
        return view('admin.layouts.profile');
    });

    Route::get('profile', [AuthController::class, 'profile'])->name('profile');
    Route::post('profile', [ProfileController::class, 'updateProfile'])->name('update.profile');
    Route::post('profile/updatePassword', [ProfileController::class, 'changePassword'])->name('profile.changepassword');

    // Route::get('/', function () {
    //     return view('admin.pages.home.home');
    // })->name('admin.home');
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');

    //2. Routes cho Portfolio
    Route::resource('portfolio', PortfolioController::class)->except(['show']);

    // 3. Routes cho Project\
    Route::resource('project', ProjectsController::class)->except(['show']);


    // 4. Routes cho News

    Route::resource('news', NewsController::class)->except(['show']);
    Route::post('/upload-image', [UploadController::class, 'upload']);

    //5. Members

    Route::resource('members', MembersController::class)->except(['show']);


    //6. notice
    Route::get('/notice', [ContactController::class, 'index'])->name('admin.contacts');
    Route::get('/notice-details/{id}', [ContactController::class, 'details'])->name('details');
    Route::delete('/notice/{id}', [ContactController::class, 'destroy'])->name('destroy');

    //7. Contact
    Route::get('/contact', [DesignRequestController::class, 'index'])->name('design.request');
    Route::get('/contact-details/{id}', [DesignRequestController::class, 'details'])->name('request.details');
    Route::delete('contact/{id}', [DesignRequestController::class, 'destroy'])->name('request.destroy');
});
