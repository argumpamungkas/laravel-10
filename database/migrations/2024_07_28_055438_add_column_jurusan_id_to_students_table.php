<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // type(unsignedBigInteger) untuk mengambil dari primary key tabel lain
            $table->unsignedBigInteger('jurusan_id')->require()->after('gender');
            // foreignkey jurusan_id me-reference column id yang ada di table jurusan
            $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['jurusan_id']);
            $table->dropColumn('jurusan_id');
        });
    }
};
