<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontroller;
use App\Http\Controllers\Usercontroller;

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


Route::get('/', [firstcontroller::class,'homepage']);
Route::get('/about', [firstcontroller::class,'about']);
Route::get('/contact', [firstcontroller::class,'contact']);
Route::post('/register', [Usercontroller::class,'register']);
Route::view('login',[Usercontroller::class,'login']);
