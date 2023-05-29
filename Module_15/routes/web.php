<?php

use App\Http\Controllers\Registrationcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

// Question 1

Route::post('/register', [Registrationcontroller::class,'Validate'])

// Question 2

Route::get('/dashboard', function () {
    return view('page.dashboard');
});

Route::get('/home', function () {
    return redirect('/dashboard', 302);
});


//Question 4
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        
    });

    Route::get('/settings', function () {
        
    });
});


Route::get('/contact',function(){
 return view('page.contact');
});
Route::post('/sendmail', ContactController::class);