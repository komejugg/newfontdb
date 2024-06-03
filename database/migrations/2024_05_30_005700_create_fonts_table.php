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
        Schema::create('fonts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artist_id');
            $table->string('font_name', 128)->nullable();
            $table->string('font_eng_name', 128)->nullable();
            $table->string('font_count', 128)->nullable();
            $table->string('sample_text', 128)->nullable();
            $table->string('creater_name', 64)->nullable();
            $table->string('fontdata', 512)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fonts');
    }
};
