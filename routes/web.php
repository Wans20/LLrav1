<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use Symfony\Component\Routing\RouteCompiler;

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

//crud student
//untuk mengeluarkan list data
// Route::get('/student', [StudentController::class, 'index']);
// // untuk mengeluarkan form view insert
// Route::get('/student/create', [StudentController::class, 'create']);
// // untuk mengeluarkan form view update
// Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
// // untuk menyimpan
// Route::post('/student', [StudentController::class, 'store']);
// // untuk edit
// Route::put('/student/{id}', [StudentController::class, 'update']);
// // untuk delete
// Route::delete('/student/{id}', [StudentController::class, 'destroy']);
//cara mudah
Route::resource('student',StudentController::class);

//crud major
Route::resource('major',MajorController::class);
