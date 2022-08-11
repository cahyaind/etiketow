<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourApiController;

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

Route::get('/tours',[TourApiController::class,'index']);
Route::post('/tours',[TourApiController::class,'store']);
Route::get('/tours/{id}/edit',[TourApiController::class, 'edit']);
Route::get('/tours/{id}',[TourApiController::class, 'show']);
Route::put('/tours/{id}',[TourApiController::class, 'update']);
Route::delete('/tours/{id}',[TourApiController::class, 'destroy']);
