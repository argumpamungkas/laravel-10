<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    function index()
    {
        // $jurusan = Jurusan::with(['students', 'lecturers'])->get();
        $jurusan = Jurusan::get();
        return view(
            'jurusan',
            ['jurusanList' => $jurusan]
        );
    }

    function show($id)
    {
        $jurusan = Jurusan::with(['students', 'lecturers'])->findOrFail($id);
        return view(
            'jurusan-detail',
            ['jurusan' => $jurusan]
        );
    }
}
