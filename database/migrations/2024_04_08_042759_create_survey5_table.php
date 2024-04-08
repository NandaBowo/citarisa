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
            $table->string('survei81');
            $table->string('survei82');
            $table->string('survei83');
            $table->string('survei84');
            $table->string('survei85');
            $table->string('survei86');
            $table->string('survei87');
            $table->string('survei88');
            $table->string('survei89');
            $table->string('survei90');
            $table->string('survei91');
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
