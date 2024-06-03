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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('kana', 64)->nullable();
            $table->date('birth')->nullable();
            $table->string('agency', 64)->nullable();
            $table->string('genre', 64)->nullable();
            $table->string('sex', 48)->nullable();
            $table->string('profile', 4096)->nullable();
            $table->string('hobby', 4096)->nullable();
            $table->string('twitter', 256)->nullable();
            $table->string('instagram', 256)->nullable();
            $table->string('youtube', 256)->nullable();
            $table->string('tiktok', 256)->nullable();
            $table->string('hp', 256)->nullable();
            $table->string('profile_image', 256)->nullable();
            $table->string('font_image', 256)->nullable();
            $table->string('handwritten_image', 256)->nullable();
            $table->timestamps();
            $table->timestamp('timestamp')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
