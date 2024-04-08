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
        Schema::create('survey3', function (Blueprint $table) {
            $table->id();
            $table->string('survei41');
            $table->string('survei42');
            $table->string('survei43');
            $table->string('survei44');
            $table->string('survei45');
            $table->string('survei46');
            $table->string('survei47');
            $table->string('survei48');
            $table->string('survei49');
            $table->string('survei50');
            $table->string('survei51');
            $table->string('survei52');
            $table->string('survei53');
            $table->string('survei54');
            $table->string('survei55');
            $table->string('survei56');
            $table->string('survei57');
            $table->string('survei58');
            $table->string('survei59');
            $table->string('survei60');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey3');
    }
};
