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
        Schema::create('survey2', function (Blueprint $table) {
            $table->id();
            $table->string('survei21');
            $table->string('survei22');
            $table->string('survei23');
            $table->string('survei24');
            $table->string('survei25');
            $table->string('survei26');
            $table->string('survei27');
            $table->string('survei28');
            $table->string('survei29');
            $table->string('survei30');
            $table->string('survei31');
            $table->string('survei32');
            $table->string('survei33');
            $table->string('survei34');
            $table->string('survei35');
            $table->string('survei36');
            $table->string('survei37');
            $table->string('survei38');
            $table->string('survei39');
            $table->string('survei40');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey2');
    }
};
