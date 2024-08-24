<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    function index()
    {
        $lecturers = Lecturer::all();
        return view('lecturer', [
            'lecturerList' => $lecturers
        ]);
    }
    function show($id)
    {
        $lecturer = Lecturer::findOrFail($id);
        return view('lecturer-detail', [
            'lecturer' => $lecturer
        ]);
    }
}
