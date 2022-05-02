<?php

use App\Http\Controllers\Auth\AuthenticatedSessionCategoryController;
use App\Http\Controllers\Auth\ConfirmablePasswordCategoryController;
use App\Http\Controllers\Auth\EmailVerificationNotificationCategoryController;
use App\Http\Controllers\Auth\EmailVerificationPromptCategoryController;
use App\Http\Controllers\Auth\NewPasswordCategoryController;
use App\Http\Controllers\Auth\PasswordResetLinkCategoryController;
use App\Http\Controllers\Auth\RegisteredUserCategoryController;
use App\Http\Controllers\Auth\VerifyEmailCategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserCategoryController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserCategoryController::class, 'store']);

    Route::get('login', [AuthenticatedSessionCategoryController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionCategoryController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkCategoryController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkCategoryController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordCategoryController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordCategoryController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptCategoryController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailCategoryController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationCategoryController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordCategoryController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordCategoryController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionCategoryController::class, 'destroy'])
                ->name('logout');
});
