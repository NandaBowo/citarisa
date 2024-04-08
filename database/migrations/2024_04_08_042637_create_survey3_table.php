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
            $table->string('survei50')->nullable();
            $table->string('survei51')->nullable();
            $table->string('survei52')->nullable();
            $table->string('survei53')->nullable();
            $table->string('survei54')->nullable();
            $table->string('survei55')->nullable();
            $table->string('survei56')->nullable();
            $table->string('survei57')->nullable();
            $table->string('survei58')->nullable();
            $table->string('survei59')->nullable();
            $table->string('survei60')->nullable();
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
