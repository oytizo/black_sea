<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\StudentController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Teacher\Auth\AuthenticatedSessionController;

Route::middleware('guest:teacher')->prefix('teacher')->name('teacher.')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:teacher')->prefix('teacher')->name('teacher.')->group(function () {
    Route::get('/dashboard', function () {
        return view('Teacher.dashboard');
    })->middleware('verified')->name('dashboard');
    //Teacher
    Route::get('/TeacherView', [TeacherController::class, 'index'])->name('teacher.view');
    Route::get('/TeacherCreate', [TeacherController::class, 'create'])->name('teacher.create');
    Route::post('/TeacherStore', [TeacherController::class, 'store'])->name('teacher.store');
    Route::get('/TeacherShow/{teacher}', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::post('/TeacherUpdate/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::get('/TeacherDelete/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
    //Student
    Route::get('/StudentView', [TeacherController::class, 'studentinfo'])->name('student.view');
//    logout
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
