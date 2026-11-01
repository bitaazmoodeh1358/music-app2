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
        Schema::create('folder_songs', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('folder_id')->constrained('folders')->cascadeOnDelete();
            $table->foreignUuid('song_id')->constrained('songs')->cascadeOnDelete();
            $table->primary(['folder_id', 'song_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folder_songs');
    }
};
