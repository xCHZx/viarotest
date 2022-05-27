<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\StudentsGradesController;
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
    return view('dashboard');
});

Route::get('/students',[StudentsController::class, "index"])->name("students.index");
    Route::get('/students/data',[StudentsController::class, "getData"])->name("students.data");
    Route::post('/students/store',[StudentsController::class, "store"])->name("students.store");
    Route::post('/students/update/',[StudentsController::class, "update"])->name("students.update");
    Route::post('/students/delete',[StudentsController::class, "delete"])->name("students.delete");


Route::get('/teachers',[TeachersController::class, "index"])->name("teachers.index");
    Route::get('/teachers/data',[TeachersController::class, "getData"])->name("teachers.data");
    Route::post('/teachers/store',[TeachersController::class, "store"])->name("teachers.store");
    Route::post('/teachers/update/',[TeachersController::class, "update"])->name("teachers.update");
    Route::post('/teachers/delete',[TeachersController::class, "delete"])->name("teachers.delete");

Route::get('/grades',[GradesController::class, "index"])->name("grades.index");
    Route::get('/grades/data',[GradesController::class, "getData"])->name("grades.data");
    Route::post('/grades/store',[GradesController::class, "store"])->name("grades.store");
    Route::post('/grades/update/',[GradesController::class, "update"])->name("grades.update");
    Route::post('/grades/delete',[GradesController::class, "delete"])->name("grades.delete");

Route::get('/students-grades',[StudentsGradesController::class, "index"])->name("students-grades.index");
    Route::get('/students-grades/data',[StudentsGradesController::class, "getData"])->name("students-grades.data");
    Route::post('/students-grades/store',[StudentsGradesController::class, "store"])->name("students-grades.store");
    Route::post('/students-grades/update/',[StudentsGradesController::class, "update"])->name("students-grades.update");
    Route::post('/students-grades/delete',[StudentsGradesController::class, "delete"])->name("students-grades.delete");
