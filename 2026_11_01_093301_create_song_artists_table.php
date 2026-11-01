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
        Schema::create('song_artists', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('song_id')->constrained('songs')->cascadeOnDelete();
            $table->foreignUuid('artist_id')->constrained('artists')->cascadeOnDelete();
            $table->integer('display_order')->default(1);
            $table->primary(['song_id', 'artist_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song_artists');
    }
};
