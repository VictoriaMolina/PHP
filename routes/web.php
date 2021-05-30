<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;

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

Route::get('/program', [ProgramController::class, 'index']);
Route::get('/program/new', [ProgramController::class, 'create']);
Route::post('/program/save', [ProgramController::class, 'store']);
Route::get('/program/show/{id}', [ProgramController::class, 'show']);
Route::post('/program/update', [ProgramController::class, 'update']);
Route::get('/program/delete/{id}', [ProgramController::class, 'destroy']);
