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
        Schema::create('songs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->foreignUuid('album_id')->nullable()->constrained('albums')->nullOnDelete(); // اصلاح تایپی
            $table->foreignUuid('audio_file_id')->nullable()->constrained('files')->nullOnDelete();
            $table->foreignUuid('cover_image_id')->nullable()->constrained('files')->nullOnDelete();
            $table->unsignedBigInteger('play_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
