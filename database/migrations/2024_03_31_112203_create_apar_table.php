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
        Schema::create('apar', function (Blueprint $table) {
            $table->id();
            $table->string('merek');
            $table->string('jenis');
            $table->string('lokasi');
            $table->date('tanggalpengecekan');
            $table->float('berat');
            $table->string('segel');
            $table->string('selang');
            $table->string('indikator');
            $table->string('fisik');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apar');
    }
};
