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
Route::post('layouts/adddrop',[LoginController::class,'addDrop'])->name('adddrop');
Route::get('layouts/oneapplayout', [LoginController::class, 'oneapp'])->name('haiii');
Route::get('layouts/createcat',[LoginController::class,'createcat'])->name('helo');
Route::post('layouts/createcat',[LoginController::class,'storecat'])->name('helio');
Route::get('layouts/createcatapp',[LoginController::class,'twoapp'])->name('bro');
Route::get('layouts/createtwo', [LoginController::class, 'createtwo'])->name('layouts.createtwo');
Route::post('layouts/createtwo', [LoginController::class, 'story']);
Route::put('layouts/{id}/edited', [LoginController::class, 'updated']);
Route::get('layouts/{id}/edited',[LoginController::class,'edited']);
Route::get('layouts/{id}/deleted',[LoginController::class,'deleted']);
Route::get('/your-route', [LoginController::class, 'creating']);
Route::get('layouts/createcat', [LoginController::class, 'treat']);
Route::get('layouts/{id}/edyt',[LoginController::class,'edyt'])->name('how');
Route::get('layouts/createcat', [LoginController::class, 'bat']);
Route::get('layouts/{id}/edyt',[LoginController::class,'edyt']);
Route::put('layouts/{id}/edyt',[LoginController::class,'updat']);
Route::get('layouts/{id}/delet',[LoginController::class,'delet']);







