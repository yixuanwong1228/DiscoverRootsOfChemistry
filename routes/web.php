<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ChemistController;

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
    return view('welcome');
});

Route::get('/VirtualLab_Index',[GameController::class,'VirtualLab_Index']);

Route::get('/face_change_game',[GameController::class,'face_change_game']);

Route::get('/AtomicStructure_Index',[GameController::class,'AtomicStructure_Index']);
Route::get('/Isotopes_Index',[GameController::class,'Isotopes_Index']);
Route::get('/Chemist_Index',[ChemistController::class,'Chemist_Index']);
Route::get('/Chemist_Profile',[ChemistController::class,'Chemist_Profile']);
Route::get('/PeriodicTable_Index',[GameController::class,'PeriodicTable_Index']);