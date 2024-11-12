<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\AssessmentController;

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

require __DIR__.'/auth.php';

// Admin Side
route::get('admin/index', [HomeContoller::class, 'index'])->middleware (['auth','admin']); 
route::get('admin/module', [HomeContoller::class, 'module'])->middleware (['auth','admin']); 
route::get('admin/users', [HomeContoller::class, 'users'])->middleware (['auth','admin']); 
route::get('admin/users', [UserController::class, 'loadAllUsers'])->middleware (['auth','admin']); 

//Module Route
route::get('module/index', [ModuleController::class, 'index'])->middleware (['auth','verified']); 

//Assessment Route
route::get('/assessment/index', [AssessmentController::class, 'index'])->middleware (['auth','verified']); 

//Exam Route
route::get('/exam/index', [ExamController::class, 'index'])->middleware (['auth','verified']); 

