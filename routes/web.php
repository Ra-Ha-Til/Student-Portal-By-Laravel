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
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them
| will be assigned to the "web" middleware group. Make something great!
|
*/

// Redirect root URL to dashboard
Route::get('/', function () {
    return redirect('/dashboard');
});

// Auth routes (login, register, logout, etc.)
Auth::routes();

// ✅ Only logged-in users can access these routes
Route::middleware(['auth'])->group(function () {
    // Dashboard
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