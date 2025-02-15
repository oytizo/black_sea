<?php

use App\Http\Controllers\Register\RegisterController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Teacher\TeacherController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Register
Route::get('/RegisterView',[RegisterController::class,'index'])->name('register.view');

// Student
Route::get('/StudentView',[StudentController::class,'index'])->name('student.view');
Route::get('/StudentCreate',[StudentController::class,'create'])->name('student.create');
Route::post('/StudentStore',[StudentController::class,'store'])->name('student.store');
Route::get('/StudentShow/{student}',[StudentController::class,'edit'])->name('student.edit');
Route::post('/StudentUpdate/{student}',[StudentController::class,'update'])->name('student.update');
Route::get('/StudentDelete/{student}',[StudentController::class,'destroy'])->name('student.destroy');

//Teacher
Route::get('/TeacherView',[TeacherController::class,'index'])->name('teacher.view');
Route::get('/TeacherCreate',[TeacherController::class,'create'])->name('teacher.create');
Route::post('/TeacherStore',[TeacherController::class,'store'])->name('teacher.store');
Route::get('/TeacherShow/{teacher}',[TeacherController::class,'edit'])->name('teacher.edit');
Route::post('/TeacherUpdate/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
Route::get('/TeacherDelete/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');



require __DIR__.'/auth.php';
