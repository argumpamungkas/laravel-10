<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        $dataStudent = [
            [
                'nim' => '361801012',
                'name' => 'Argumelar Pamungkas',
                'gender' => 'L',
                'jurusan_id' => 2,
            ],
            [
                'nim' => '351801004',
                'name' => 'Jaka Prayuda',
                'gender' => 'L',
                'jurusan_id' => 1,
            ],
            [
                'nim' => '351801002',
                'name' => 'Annisa Permata',
                'gender' => 'P',
                'jurusan_id' => 1,
            ],
            [
                'nim' => '341801002',
                'name' => 'Inez',
                'gender' => 'P',
                'jurusan_id' => 3,
            ],
            [
                'nim' => '361801013',
                'name' => 'Hadianto',
                'gender' => 'L',
                'jurusan_id' => 2,
            ],
        ];

        foreach ($dataStudent as $student) {
            Student::insert([
                'nim' => $student['nim'],
                'name' => $student['name'],
                'gender' => $student['gender'],
                'jurusan_id' => $student['jurusan_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
