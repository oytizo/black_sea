<?php

use App\Http\Controllers\Register\RegisterController;
use App\Http\Controllers\Student\StudentController;
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
Route::post('/StudentStore',[StudentController::class,'store'])->name('student.store');

//Teacher

require __DIR__.'/auth.php';
