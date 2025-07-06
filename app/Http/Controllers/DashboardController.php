<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'students' => Student::count(),
            'teachers' => Teacher::count(),
            'courses' => Course::count(),
            'revenue' => Payment::sum('amount'),
            'recentEnrollments' => Enrollment::with(['student', 'batch.course'])
                ->latest()
                ->take(5)
                ->get(),
            'recentPayments' => Payment::with(['enrollment.student'])
                ->latest()
                ->take(5)
                ->get()
        ];

        return view('dashboard', compact('stats'));
    }
}