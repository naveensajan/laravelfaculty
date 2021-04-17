<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacualtyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BookController;

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

Route::get('/',[FacualtyController::class , 'create' ] );
Route::get('/student',[StudentController::class , 'create' ] );
Route::get('/busadd',[BusController::class , 'create' ] );
Route::get('/book',[BookController::class , 'create' ] );
Route::post('/facultyread',[FacualtyController::class,'store']);
Route::post('/studread',[StudentController::class , 'store' ] );
Route::post('/busread',[BusController::class , 'store' ] );
Route::post('/bookread',[BookController::class , 'store' ] );
Route::get('/faculties',[FacualtyController::class , 'index' ] );
Route::get('/viewstudent',[StudentController::class , 'index' ] );
Route::post('/facultiesearch',[FacualtyController::class , 'search' ] );
Route::get('/faculties/{id}/edit',[FacualtyController::class , 'edit' ] );
Route::post('/facultieupdate/{id}',[FacualtyController::class , 'update' ] );