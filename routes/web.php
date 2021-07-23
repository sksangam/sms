<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->group(function () {
//     Route::view('/students', 'students.index');
//     Route::view('/students/create', 'students.create');
// });


// Route::get('/student', [StudentController::class, 'index'])->name('student.index');
// Route::get('student/create', [StudentController::class, 'create'])->name('student.create');
// Route::post('student', [StudentController::class, 'store'])->name('student.store');
// Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
// Route::put('/student/{id}', [StudentController::class, 'update'])->name('student.update');

Route::resource('student', StudentController::class);
