<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\Jurusan;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
            'students/students',
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
            'students/student-detail',
            ['student' => $student]
        );
    }

    function create()
    {
        // dd("INI ADD STUDENT");
        // $jurusans = Jurusan::all(); // PENGAMBILAN SEMUA COLUMN NYA
        $jurusans = Jurusan::select('id', 'name')->get();
        return view('students/student-add', ['jurusans' => $jurusans]);
    }

    function store(StudentCreateRequest $request)
    {
        //CARA PERTAMA
        // $student = new Student;
        // $student->nim = $request->nim;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->jurusan_id = $request->jurusan_id;
        // $student->save();

        //CARA KEDUA MASS ASSIGNMENT CUMAN TAMBAH SYARAT DI MODEL UNTUK MEMBATASI MANA SAJA YANG DITAMBAH KE KOLOM
        // $student = Student::create([])

        // JIKA VALIDATION NYA TIDAK MENGGUNAKAN FILE EXTERNAL
        // $validated = $request->validate([
        //     'nim' => 'unique:students|max:9',
        // ]);

        $student = Student::create($request->all());

        if ($student) {
            // $request->session()->flash('status', 'Sukses add student');
            Session::flash('status', 'success');
            Session::flash('message', "$request->name berhasil ditambahkan");
        } else {
            Session::flash('status', 'failed');
            Session::flash('message', "$request->name gagal ditambahkan");
        }

        return redirect('/students');
    }

    function edit($id)
    {
        $student = Student::with([
            'jurusan',
        ])->findOrFail($id);
        $jurusans = Jurusan::select('id', 'name')->where('id', '!=', $student->jurusan_id)->get();
        return view('students/student-edit', [
            // 'request' => $request->all(),
            'jurusans' => $jurusans,
            'student' => $student,
        ]);
    }

    function update(Request $request, $id)
    {
        // dd($request->all());
        $student = Student::findOrFail($id);
        // $student->nim = $request->nim;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->jurusan_id = $request->jurusan_id;
        // $student->save();
        $student->update($request->all());
        // Student::where('id', $id)->update($request->all());
        return redirect('/students');
    }

    function delete(Request $request, $id)
    {
        // dd($request->all());
        $student = Student::findOrFail($id);
        // $student->nim = $request->nim;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->jurusan_id = $request->jurusan_id;
        // $student->save();
        $student->delete();
        // Student::where('id', $id)->update($request->all());
        return redirect('/students');
    }
}
