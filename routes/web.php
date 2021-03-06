<?php

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Route::resource('students',StudentController::class);
// Route::get('students',[StudentController::class, 'index']);
// Route::get('display',[StudentController::class, 'show']);
// Route::get('create',[StudentController::class, 'create']);
// Route::post('create',[StudentController::class, 'store']);
// Route::get('edit/{id}',[StudentController::class, 'edit']);
// Route::post('update/{id}',[StudentController::class, 'update'])->name('update');
// // // Route::resource('students','StudentController');
Route::get('delete/{id}',[StudentController::class, 'destroy'])->name('delete');
// Route::get('deletef/{id}',[FacultyController::class, 'destroy'])->name('deletef');
Route::resource('faculty',FacultyController::class);

