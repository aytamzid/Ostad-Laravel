<?php

use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\PassresetPageController;
use App\Http\Controllers\SignupPageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route for displaying

Route::get('/', [LoginPageController::class, 'page']);
Route::get('/forgotpassword', [PassresetPageController::class, 'page']);
Route::get('/signup', [SignupPageController::class, 'page']);



//Route
Route::post('/user-registration', [UserController::class, 'UserRegistration']);
Route::post('/user-login', [UserController::class, 'UserLogin']);
Route::post('/send-otp', [UserController::class, 'SendOTPCode']);
Route::post('/verify-otp', [UserController::class, 'VerifyOTP']);
Route::post('/reset-password', [UserController::class, 'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);
