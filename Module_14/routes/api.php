<?php

use App\Http\Controllers\Mod14AssignmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Question 1
Route::post('/userinfo', [Mod14AssignmentController::class, 'UserInfo']);

// Question 2
Route::post('/useragent',[AssignmentController::class,'UserAgent']);


// Question 3
Route::get('/query',[AssignmentController::class,'ApiEndpoint']);


// Question 4
Route::get('/jsonresponse',[AssignmentController::class,'JsonResponse']);

// Question 5
Route::post('/upload',[AssignmentController::class,'FileUploads']);


// Question 6
Route::post('/setcookie',[AssignmentController::class,'SetCookie']);
