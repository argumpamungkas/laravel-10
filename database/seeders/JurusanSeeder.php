<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('jurusan_table')->insert([
        //     'name' => 'Manajemen Informatika'
        // ]);

        Schema::disableForeignKeyConstraints(); // disable key
        Jurusan::truncate(); // drop / dihapus semua
        Schema::enableForeignKeyConstraints(); //enable key

        $dataList = [
            ['name' => 'Sistem Informasi'],
            ['name' => 'Teknik Informatika'],
            ['name' => 'Manajemen Informatika']
        ];

        foreach ($dataList as $value) {
            Jurusan::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
