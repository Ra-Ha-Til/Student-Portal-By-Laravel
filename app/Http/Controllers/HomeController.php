<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function index()
    {
        $studentCount = Student::count();
        $teacherCount = Teacher::count();

        return view('dashboard', [
            'studentCount' => $studentCount,
            'teacherCount' => $teacherCount,
        ]);
    }
}