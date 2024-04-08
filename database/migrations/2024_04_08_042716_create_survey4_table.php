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
            $table->string('survei61');
            $table->string('survei62');
            $table->string('survei63');
            $table->string('survei64');
            $table->string('survei65');
            $table->string('survei66');
            $table->string('survei67');
            $table->string('survei68');
            $table->string('survei69');
            $table->string('survei70');
            $table->string('survei71');
            $table->string('survei72');
            $table->string('survei73');
            $table->string('survei74');
            $table->string('survei75');
            $table->string('survei76');
            $table->string('survei77');
            $table->string('survei78');
            $table->string('survei79');
            $table->string('survei80');
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
