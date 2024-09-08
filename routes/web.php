<?php

use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        'nama' => 'Argumelar Pamungkas',
        'role' => 'Player',
        'anime' => [
            'Ao Ashi',
            'Captain Tsubasa',
            'Blue Lock',
            'Giant Killing',
        ]
    ]);
});

// parameter ke 2 tergantung dari nama function yang ada di controllernya
Route::get('/students', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']); // detail
Route::get('/student-add', [StudentController::class, 'create']); // add
Route::post('/student', [StudentController::class, 'store']); // add
Route::get('/student-edit/{id}', [StudentController::class, 'edit']); // edit
Route::put('/student/{id}', [StudentController::class, 'update']); // update
Route::get('/student-delete/{id}', [StudentController::class, 'delete']); // delete
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy']); // delete

Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('/jurusan/{id}', [JurusanController::class, 'show']);

Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/extracurricular/{id}', [ExtracurricularController::class, 'show']);

Route::get('/lecturer', [LecturerController::class, 'index']);
Route::get('/lecturer/{id}', [LecturerController::class, 'show']);
