<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;

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
    return view('welcome');
});

Route::get('/tours',[TourController::class,'index']);
Route::get('/tours/create',[TourController::class,'create']);
Route::post('/tours',[TourController::class,'store']);
Route::get('/tours/{id}/edit',[TourController::class, 'edit']);
// untuk parameter, kurung kurawal hanya satu
Route::put('/tours/{id}',[TourController::class, 'update']);
Route::delete('/tours/{id}',[TourController::class, 'destroy']);