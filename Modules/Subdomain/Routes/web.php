<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\DisableFrontend;
use Illuminate\Support\Facades\Route;
use Modules\Subdomain\Http\Controllers\SubdomainController;
use Modules\Subdomain\Http\Middleware\SubdomainCheck;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;

if (!class_exists('App\Http\Controllers\SuperAdmin\FrontendController')) {
    class_alias('App\Http\Controllers\HomeController', 'App\Http\Controllers\SuperAdmin\FrontendController');
}

if (!class_exists('App\Http\Controllers\SuperAdmin\CompanyRegisterController')) {
    class_alias('App\Http\Controllers\RegisterController', 'App\Http\Controllers\SuperAdmin\CompanyRegisterController');
}

use App\Http\Controllers\SuperAdmin\FrontendController;
use App\Http\Controllers\SuperAdmin\CompanyRegisterController;

Route::group(['middleware' => ['web', SubdomainCheck::class, DisableFrontend::class]], function () {
    Route::get('/', [App\Http\Controllers\BrandZoPublicWebsiteController::class, 'home'])->name('front.home');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('front.contact');
    Route::post('/contact-us', [FrontendController::class, 'contactUs'])->name('front.contact-us');
    Route::get('/features', [FrontendController::class, 'feature'])->name('front.feature');
    Route::get('/pricing', [App\Http\Controllers\BrandZoPublicWebsiteController::class, 'page'])->name('front.pricing');
    Route::post('check-domain', [SubdomainController::class, 'checkDomain'])->name('front.check-domain');
});

Route::group(['middleware' => ['web', SubdomainCheck::class]], function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware('guest');
    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
});

Route::group(['middleware' => SubdomainCheck::class], function () {
    Route::get('/super-admin-login', [AuthenticatedSessionController::class, 'create'])->middleware('guest');
    Route::post('/super-admin-login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
    Route::get('forgot-company', 'SubdomainController@forgotCompany')->name('front.forgot-company')->middleware('guest');
    Route::post('forgot-company', 'SubdomainController@submitForgotCompany')->name('front.submit-forgot-password')->middleware('guest');
    Route::get('signin', [SubdomainController::class, 'workspace'])->name('front.workspace');
    Route::get('signup', [CompanyRegisterController::class,'index'])->name('front.signup.index');
});

Route::group(['middleware' => 'auth', 'prefix' => 'account'], function () {
    Route::get('banned-subdomains', ['uses' => 'BannedSubdomainController@bannedDomain'])->name('super-admin.get.banned-subdomains');
    Route::put('banned-subdomains', ['uses' => 'BannedSubdomainController@bannedDomainSubmit'])->name('super-admin.post.banned-subdomains');
    Route::delete('banned-subdomains/{keyIndex}', ['uses' => 'BannedSubdomainController@deleteBannedDomain'])->name('super-admin.banned-subdomains.destroy');
    Route::post('notify/domain', [SubdomainController::class, 'notifyDomain'])->name('notify.domain');
});
