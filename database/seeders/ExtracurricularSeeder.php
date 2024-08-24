<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints(); // disable key
        Extracurricular::truncate(); // drop / dihapus semua
        Schema::enableForeignKeyConstraints(); //enable key

        $dataList = [
            ['name' => 'Sepak bola/Futsal'],
            ['name' => 'Bulu Tangkis'],
            ['name' => 'Basket'],
            ['name' => 'Taekwondo'],
        ];

        foreach ($dataList as $value) {
            Extracurricular::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
