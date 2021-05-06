<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index')->with('students', Student::all());
    }

    public function show()
    {
        return view('students.show');
    }
}
