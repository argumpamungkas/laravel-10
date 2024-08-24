<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ExtracurricularController extends Controller
{
    function index()
    {
        // $extras = Extracurricular::with('students')->get();
        $extras = Extracurricular::get();
        // dd($extras);
        return view(
            'extracurricular',
            ['extraList' => $extras]
        );
    }

    function show($id)
    {
        // $extras = Extracurricular::with('students')->get();
        $extras = Extracurricular::with(['students'])->findOrFail($id);
        // dd($extras);
        return view(
            'extracurricular-detail',
            ['extra' => $extras]
        );
    }
}
