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
        Schema::create('limbah_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_limbah');
            $table->date('tanggal_keluar_limbah');
            $table->float('jumlah_limbah_keluar');
            $table->string('tujuan_penyerahan');
            $table->string('bukti_nomor_dokumen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('limbah_keluars');
    }
};
