<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'studentCount' => Student::count(),
            'teacherCount' => Teacher::count(),
        ]);
    }
}