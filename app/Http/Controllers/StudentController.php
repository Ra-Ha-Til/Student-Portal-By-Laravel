<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'address' => 'required',
            'mobile' => 'required'
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Student created successfully.');
    }

    // Add other methods (show, edit, update, destroy) similarly
}