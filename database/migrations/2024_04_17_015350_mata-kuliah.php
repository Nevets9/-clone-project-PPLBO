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
        Schema::create('mata-kuliah', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kodeMK');
            $table->string('mataKuliah');
            $table->string('sks');
            $table->string('hari');
            $table->string('jam');
            $table->string('dosen');
            $table->string('ruangan');
            $table->string('kapasitas');
            $table->string('terisi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata-kuliah');
    }
};
