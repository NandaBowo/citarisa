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
        Schema::create('limbah_masuks', function (Blueprint $table) {
            $table->id();
            $table->string("jenis_limbah");
            $table->date("tanggal_masuk_limbah");
            $table->string("sumber_limbah");
            $table->float("jumlah_limbah");
            $table->date("maksimal_penyimpanan_limbah");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('limbah_masuks');
    }
};
