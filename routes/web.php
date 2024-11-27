<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\AdminModuleController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminQuizController;
use App\Http\Controllers\AdminQuestionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//user side
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index'); // List quizzes
    Route::get('/quizzes/{quizzes}', [QuizController::class, 'show'])->name('quizzes.show'); // Show questions for a quiz
    Route::post('/quizzes/{quizzes}/submit', [QuizController::class, 'submit'])->name('quizzes.submit'); // Submit answers
    Route::get('/quizzes/{quizzes}/results/{attempt}', [QuizController::class, 'result'])->name('quizzes.results'); // Show results
    Route::get('/usermodule/index', [ModuleController::class, 'usermoduleindex'])->name('usermodule.index');
    Route::get('/usermodule/{id}', [ModuleController::class, 'show'])->name('usermodule.show');
    Route::get('/exams/create', [ExamController::class, 'create'])->name('exams.create');
    Route::post('/exams/{exam}/store', [ExamController::class, 'store'])->name('exams.store');
    Route::get('/exams/{exam}/result', [ExamController::class, 'result'])->name('exams.result');
});
 


// Admin Side
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
route::get('/', [HomeContoller::class, 'index'])->name('admin.index');   
route::get('index', [HomeContoller::class, 'index'])->name('admin.index');

route::get('users', [HomeContoller::class, 'users'])->name('admin.users');
route::get('users', [UserController::class, 'loadAllUsers'])->name('admin.users');

Route::get('quiz', [AdminQuizController::class, 'quizindex'])->name('admin.quiz');
Route::post('quiz', [AdminQuizController::class, 'store'])->name('admin.quizstore');
Route::get('showquiz/{id}', [AdminQuizController::class, 'show']);
Route::get('createquiz', [AdminQuizController::class, 'createquiz'])->name('admin.createquiz');

Route::get('{quizzes}/createquestion', [AdminQuestionController::class, 'create'])->name('admin.createquestion');
Route::post('{quizzes}/createquestion', [AdminQuestionController::class, 'store'])->name('admin.questionstore');
Route::get('/{quizzes}/showquestions', [AdminQuizController::class, 'showQuestions'])->name('admin.showquestions');
Route::get('/{quizzes}/questionsedit/{questions}', [AdminQuestionController::class, 'edit'])->name('admin.questionsedit');
Route::put('/{quizzes}/{questions}', [AdminQuestionController::class, 'update'])->name('admin.questionsupdate');
Route::delete('{questions}', [AdminQuestionController::class, 'destroy'])->name('admin.questionsdestroy');

Route::get('/modules/module', [AdminModuleController::class, 'moduleindex'])->name('admin.modules.module');
Route::get('/modules/create', [AdminModuleController::class, 'createmodule'])->name('admin.modules.create');
Route::get('/modules/{id}', [AdminModuleController::class, 'show'])->name('admin.modules.show');
Route::post('/modules/store', [AdminModuleController::class, 'store'])->name('admin.modules.store');
Route::get('/modules/{id}/edit', [AdminModuleController::class, 'edit'])->name('admin.modules.edit');
Route::put('/modules/{id}', [AdminModuleController::class, 'update'])->name('admin.modules.update');
Route::delete('/modules/{id}', [AdminModuleController::class, 'destroy'])->name('admin.modules.destroy');

Route::get('exam/index', [ExamController::class, 'examindex'])->name('admin.exam.index');
    Route::get('exam/create', [ExamController::class, 'create'])->name('admin.exam.create');
    Route::post('exam', [ExamController::class, 'store'])->name('admin.exam.store');
    Route::get('exam/{exam}/edit', [ExamController::class, 'edit'])->name('admin.exam.edit');
    Route::put('exam/{exam}', [ExamController::class, 'update'])->name('admin.exam.update');
    Route::delete('exam/{exam}', [ExamController::class, 'destroy'])->name('admin.exam.destroy');
});



//Exam Route
route::get('/exam/index', [ExamController::class, 'index'])->middleware (['auth','verified']); 

require __DIR__.'/auth.php';
