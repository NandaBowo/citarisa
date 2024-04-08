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
        Schema::create('survey4', function (Blueprint $table) {
            $table->id();
            $table->string('survei61')->nullable();
            $table->string('survei62')->nullable();
            $table->string('survei63')->nullable();
            $table->string('survei64')->nullable();
            $table->string('survei65')->nullable();
            $table->string('survei66')->nullable();
            $table->string('survei67')->nullable();
            $table->string('survei68')->nullable();
            $table->string('survei69')->nullable();
            $table->string('survei70')->nullable();
            $table->string('survei71')->nullable();
            $table->string('survei72')->nullable();
            $table->string('survei73')->nullable();
            $table->string('survei74')->nullable();
            $table->string('survei75')->nullable();
            $table->string('survei76')->nullable();
            $table->string('survei77')->nullable();
            $table->string('survei78')->nullable();
            $table->string('survei79')->nullable();
            $table->string('survei80')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey4');
    }
};
