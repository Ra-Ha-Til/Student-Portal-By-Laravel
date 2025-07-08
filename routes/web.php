<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond to
| using a Closure or controller method.
|
*/

// Redirect the home page to the dashboard
Route::get('/', function () {
    return redirect('/dashboard');
});

// Auth routes like login, register, etc.
Auth::routes();

// ✅ All these routes require the user to be logged in
Route::middleware(['auth'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Resource routes
    Route::resources([
        'students' => StudentController::class,
        'teachers' => TeacherController::class,
        'courses' => CourseController::class,
        'batches' => BatchController::class,
        'enrollments' => EnrollmentController::class,
        'payments' => PaymentController::class,
    ]);
});