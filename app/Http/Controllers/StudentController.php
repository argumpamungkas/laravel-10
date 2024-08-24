<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // query raw
        // eloquent ORM (recommend):
        // dd() = var_dump()
        // $student = Student::all();
        // Student::create([
        //     'nim' => '361801009',
        //     'name' => 'Puti',
        //     'gender' => 'P',
        //     'jurusan_id' => 2,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        //UPDATE
        // Student::find(30)->update([
        //     'name' => 'iput',
        //     'jurusan_id' => 3,
        // ]);
        // DELETE
        // Student::find(29)->delete();

        //QUERY BUILDER
        // $student = DB::table('students')->get(); // SELECT
        // insert data
        // $student = DB::table('students')->insert([
        //     'nim' => '361801001',
        //     'name' => 'Alkhalifi',
        //     'gender' => 'L',
        //     'jurusan_id' => 1,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // UPDATE
        // $student = DB::table('students')
        //     ->where('id', 28)
        //     ->update([
        //         'name' => 'Arshakka',
        //         'jurusan_id' => 2
        //     ]);
        //DELETE
        // $student = DB::table('students')->where('id', 30)->delete();
        // dd($student);

        $student = Student::get(); //RELATIONSHIP 1 (LAZY LOADING BISA MENGGUNAKAN INI)
        // CARA RELATIONSHIP KE 2 dibawah
        // $student = Student::with([
        //     'jurusan.lecturers', // nested relationship
        //     'extras'
        // ])->get(); // EAGER LOADING
        return view(
            'students',
            ['studentList' => $student]
        );
    }

    function show($id)
    {
        $student = Student::with([
            'jurusan.lecturers',
            'extras',
        ])->findOrFail($id);
        return view(
            'student-detail',
            ['student' => $student]
        );
    }
}
