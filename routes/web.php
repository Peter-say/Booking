<?php

use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Dashboards\User\HomeController;
use App\Http\Controllers\Web\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index']);

// Route::prefix('auth')->as('auth.')->group(function () {
Route::get('/register', [RegistrationController::class, 'registerForm'])->name('register');
Route::post('register/', [RegistrationController::class, 'submitRegistrationForm']);

Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/email/verify', [EmailVerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verifyEmail'])->name('verification.verify');
Route::post('/email/resend', [EmailVerificationController::class, 'resend'])->name('verification.resend');

// Forgot Password
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Reset Password
Route::get('/reset-password/{token}/{email}', [ResetPasswordController::class, 'showForm'])
->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
// });

Route::prefix('dashboard')->as('dashboard.')->group(function () {
  Route::get('/home', [HomeController::class, 'home'])->name('home');
});

