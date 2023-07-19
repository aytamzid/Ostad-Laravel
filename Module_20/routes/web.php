<?php

use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\PassresetPageController;
use App\Http\Controllers\SignupPageController;
use Illuminate\Support\Facades\Route;

// Route for displaying

Route:: get('/',[LoginPageController::class, 'page']);
Route:: get('/forgotpassword',[PassresetPageController::class, 'page']);
Route:: get('/signup',[SignupPageController::class, 'page']);
