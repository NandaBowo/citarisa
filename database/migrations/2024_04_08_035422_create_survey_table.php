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
        Schema::create('survey', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal');
            $table->string('usia');
            $table->string('jenis_kelamin');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('posisi');
            $table->string('lokasi_kerja');
            $table->string('survei1');
            $table->string('survei2');
            $table->string('survei3');
            $table->string('survei4');
            $table->string('survei5');
            $table->string('survei6');
            $table->string('survei7');
            $table->string('survei8');
            $table->string('survei9');
            $table->string('survei10');
            $table->string('survei11');
            $table->string('survei12');
            $table->string('survei13');
            $table->string('survei14');
            $table->string('survei15');
            $table->string('survei16');
            $table->string('survei17');
            $table->string('survei18');
            $table->string('survei19');
            $table->string('survei20');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey');
    }
};
