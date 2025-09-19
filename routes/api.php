<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
Route::post('/userLogin',[App\Http\Controllers\Api\AuthController::class,'userLogin']);
Route::get('/Course',[App\Http\Controllers\Api\AuthController::class,'Course']);
Route::post('/Add_Course',[App\Http\Controllers\Api\PostController::class,'Add_Course']);

});

