<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\QuizQuestionController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//categories
Route::get('/categories', [CategoriesController::class, 'index']);

//certificates
Route::get('/certificates', [CertificatesController::class, 'index']);

//certificates
Route::get('/certificates', [CertificatesController::class, 'index']);

//courses
Route::get('/courses', [CoursesController::class, 'index']);

//enrollments
Route::get('/enrollments', [EnrollmentController::class, 'index']);

//lessons
Route::get('/lessons', [LessonController::class, 'index']);

//payments
Route::get('/payments', [PaymentController::class, 'index']);

//progress
Route::get('/progress', [ProgressController::class, 'index']);

//quizzes
Route::get('/quizzes', [QuizController::class, 'index']);

//quizQuestions
Route::get('/quizQuestions', [QuizQuestionController::class, 'index']);
