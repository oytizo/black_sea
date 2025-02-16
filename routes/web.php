<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Register\RegisterController;
use App\Http\Controllers\Department\DepartmentController;

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

// Course
Route::get('/CourseView',[CourseController::class,'index'])->name('course.view');
Route::get('/CourseCreate',[CourseController::class,'create'])->name('course.create');
Route::post('/CourseStore',[CourseController::class,'store'])->name('course.store');
Route::get('/CourseShow/{course}',[CourseController::class,'edit'])->name('course.edit');
Route::post('/CourseUpdate/{course}',[CourseController::class,'update'])->name('course.update');
Route::get('/CourseDelete/{course}',[CourseController::class,'destroy'])->name('course.destroy');

// Department
Route::get('/DepartmentView',[DepartmentController::class,'index'])->name('department.view');
Route::get('/DepartmentCreate',[DepartmentController::class,'create'])->name('department.create');
Route::post('/DepartmentStore',[DepartmentController::class,'store'])->name('department.store');
Route::get('/DepartmentShow/{department}',[DepartmentController::class,'edit'])->name('department.edit');
Route::post('/DepartmentUpdate/{department}',[DepartmentController::class,'update'])->name('department.update');
Route::get('/DepartmentDelete/{department}',[DepartmentController::class,'destroy'])->name('department.destroy');


require __DIR__.'/auth.php';
