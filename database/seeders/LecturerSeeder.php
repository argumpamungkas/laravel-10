<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints(); // disable key
        Lecturer::truncate(); // drop / dihapus semua
        Schema::enableForeignKeyConstraints(); //enable key

        $dataList = [
            ['name' => 'Chalifa'],
            ['name' => 'Novi'],
            ['name' => 'Ali'],
        ];

        foreach ($dataList as $value) {
            Lecturer::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
