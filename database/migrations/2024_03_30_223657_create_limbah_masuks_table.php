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
            $table->unsignedBigInteger('sumber_limbah_id');
            $table->foreign('sumber_limbah_id')->references('id')->on('master_limbahs');
            $table->string("jenis_limbah");
            $table->date("tanggal_masuk_limbah");
            $table->float("jumlah_limbah");
            $table->date("tanggal_exp_limbah");
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
