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
        Schema::table('jurusan_table', function (Blueprint $table) {
            $table->string('name', 100)->after('id')->require()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jurusan_table', function (Blueprint $table) {
            $table->string('change', 10)->require()->after('id')->change();
        });
    }
};
