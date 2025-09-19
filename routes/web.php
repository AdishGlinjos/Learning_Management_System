<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('userLogin');

});
Route::middleware(['logresponse'])->group(function () {
    Route::post('/loginaction', [App\Http\Controllers\Web\HomeController::class, 'loginaction']);
    Route::get('/CourseMaster',[App\Http\Controllers\Web\CourseController::class, 'CourseMaster']);
    Route::post('/AddCourse',[App\Http\Controllers\Web\CourseController::class, 'AddCourse']);
    Route::post('/updateCourse',[App\Http\Controllers\Web\CourseController::class, 'updateCourse']);

});
