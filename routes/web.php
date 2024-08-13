<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtomMoleculeController;
use App\Http\Controllers\QuizController;

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

//AtomMoleculeController
Route::get('/showAtomMolecule', [AtomMoleculeController::class, 'showAtomMolecule'])->name('showAtomMolecule');
Route::get('/atomMoleculeDetails/{id}', [AtomMoleculeController::class, 'atomMoleculeDetails'])->name('atomMoleculeDetails');
Route::get('/exampleDetails/{id}', [AtomMoleculeController::class, 'exampleDetails'])->name('exampleDetails');

//QuizController
Route::get('/showQuiz', [QuizController::class, 'showQuiz'])->name('showQuiz');
Route::get('/start_quiz/{id}', [QuizController::class, 'start_quiz'])->name('start_quiz');
Route::get('/quizzes/preview/{id}', [QuizController::class, 'previewQuiz'])->name('preview_quiz');

//ajax api
Route::get('/quizzes/{quizID}/questions', [QuizController::class, 'getQuestions']);
Route::post('/save-selection', [QuizController::class, 'saveSelection'])->name('save_selection');
Route::get('/quiz/{quizID}/displaymarks', [QuizController::class, 'displayMarks']);
Route::get('/quizzes/completed', [QuizController::class, 'completed'])->name('completed');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
