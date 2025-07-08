<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::resources([
    'students' => StudentController::class,
    'teachers' => TeacherController::class,
    'courses' => CourseController::class,
    'batches' => BatchController::class,
    'enrollments' => EnrollmentController::class,
    'payments' => PaymentController::class,
]);