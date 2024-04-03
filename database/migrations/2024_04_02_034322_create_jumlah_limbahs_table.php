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
        Schema::create('jumlah_limbahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_limbah_id');
            $table->foreign('jenis_limbah_id')->references('id')->on('master_limbahs');
            $table->float('jumlah_limbah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlah_limbahs');
    }
};
