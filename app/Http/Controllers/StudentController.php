<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // query builder
        // query raw
        // dd() = var_dump()
        // eloquent ORM (recommend):
        $student = Student::all();
        // dd($student);
        return view(
            '/students',
            ['studentList' => $student]
        );
    }
}
