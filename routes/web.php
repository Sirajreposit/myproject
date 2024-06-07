<?php

use App\Http\Controllers\LoginController;
use Faker\Guesser\Name;
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

Route::get('/',[LoginController::class,'register'])
->name('home');
Route::get('/auth/login',[LoginController::class,'login'])->name('auth.login');
Route::post('/auth/login',[LoginController::class,'loginPost'])->name('login.post');
Route::get('/auth/register',[LoginController::class,'register'])->name('auth.register');
Route::post('/auth/register',[LoginController::class,'registration'])->name('register.post');
Route::get('/auth/homepage',[LoginController::class,'home'])->name('dashboard');
Route::get('/auth/logout',[LoginController::class,'logout'])->name('auth.logout');
Route::get('layouts/applayout',[LoginController::class,'index'])->name('hello');
Route::get('layouts/create',[LoginController::class,'create'])->name('helloo');
Route::post('layouts/create',[LoginController::class,'store'])->name('hellow');
Route::get('layouts/{id}/edit',[LoginController::class,'edit']);
Route::put('layouts/{id}/edit', [LoginController::class, 'update']);
Route::get('layouts/{id}/delete',[LoginController::class,'delete']);
