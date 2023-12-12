<?php
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SocialIconController;
use App\Http\Controllers\Admin\FrontendController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware('guest.admin');
        Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('admin_login')->middleware('guest.admin');
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

        Route::get('profile', [AuthenticatedSessionController::class, 'profile'])->name('profile');

        Route::post('profile/update', [AuthenticatedSessionController::class, 'profileUpdate'])->name('profile.update');
        Route::post('profile/image', [AuthenticatedSessionController::class, 'pictureUpdate'])->name('profile.picture');
        Route::post('profile/password/update', [AuthenticatedSessionController::class, 'profilePasswordUpdate'])->name('profile.password_update');
    });

    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('admin.auth');

    Route::resource('member', MemberController::class)->middleware('admin.auth');

    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('frontend', [SettingsController::class, 'frontend'])->middleware('admin.auth')->name('frontend');
        Route::post('frontend', [SettingsController::class, 'frontendUpdate'])->middleware('admin.auth')->name('frontend.update');

        Route::get('website', [SettingsController::class, 'website'])->middleware('admin.auth')->name('website');
        Route::post('logo', [SettingsController::class, 'logoUpdate'])->middleware('admin.auth')->name('logo.update');
        Route::post('icon', [SettingsController::class, 'iconUpdate'])->middleware('admin.auth')->name('icon.update');
        Route::post('name', [SettingsController::class, 'nameUpdate'])->middleware('admin.auth')->name('name.update');

        Route::get('header', [SettingsController::class, 'header'])->middleware('admin.auth')->name('header');
        Route::post('header', [SettingsController::class, 'headerUpdate'])->middleware('admin.auth')->name('header.update');

        Route::get('about', [SettingsController::class, 'about'])->middleware('admin.auth')->name('about');
        Route::post('about', [SettingsController::class, 'aboutUpdate'])->middleware('admin.auth')->name('about.update');

        Route::resource('social', SocialIconController::class);
    });


    // Frontend
    Route::name('frontend.')->prefix('frontend')->group(function () {

        Route::get('frontend-sections/{key}', [FrontendController::class, 'frontendSections'])->name('sections');
        Route::post('frontend-content/{key}', [FrontendController::class, 'frontendContent'])->name('sections.content');
        // Route::get('frontend-element/{key}/{id?}', 'frontendElement')->name('sections.element');
        Route::post('remove/{id}', [FrontendController::class, 'remove'])->name('remove');


    });


});
