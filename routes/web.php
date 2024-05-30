<?php

use App\Http\Controllers\LoginController;
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

Route::get('/',[LoginController::class,'register']);
Route::get('/register',[LoginController::class,'register']);
Route::get('/login',[LoginController::class,'login']);
Route::get('/homepage',[LoginController::class,'homepage']);
Route::get('/login',[LoginController::class,'logout']);

