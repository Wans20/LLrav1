<?php

use  App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/tentang_kami', [HomeController::class,'about'])->name('about');
Route::get('/layanan', [HomeController::class,'services'])->name('services');
Route::get('/hubungi', [HomeController::class,'contact'])->name('contact');