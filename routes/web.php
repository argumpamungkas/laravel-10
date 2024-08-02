<?php

use App\Http\Controllers\JurusanController;
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
Route::get('/jurusan', [JurusanController::class, 'index']);
