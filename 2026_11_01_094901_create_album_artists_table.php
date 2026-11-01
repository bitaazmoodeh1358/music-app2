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
        Schema::create('album_artists', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('album_id')->constrained('albums')->cascadeOnDelete();
            $table->foreignUuid('artist_id')->constrained('artists')->cascadeOnDelete();
            $table->primary(['album_id', 'artist_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('album_artists');
    }
};
