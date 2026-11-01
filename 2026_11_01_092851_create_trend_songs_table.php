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
        Schema::create('trend_songs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('song_id')->unique()->constrained('songs')->cascadeOnDelete();
            $table->integer('trend_score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trend_songss');
    }
};
