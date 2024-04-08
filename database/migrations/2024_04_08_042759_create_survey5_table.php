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
        Schema::create('survey5', function (Blueprint $table) {
            $table->id();
            $table->string('survei81')->nullable();
            $table->string('survei82')->nullable();
            $table->string('survei83')->nullable();
            $table->string('survei84')->nullable();
            $table->string('survei85')->nullable();
            $table->string('survei86')->nullable();
            $table->string('survei87')->nullable();
            $table->string('survei88')->nullable();
            $table->string('survei89')->nullable();
            $table->string('survei90')->nullable();
            $table->string('survei91')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey5');
    }
};
