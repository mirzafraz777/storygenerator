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
        Schema::table('story_generators', function (Blueprint $table) {
            $table->string('image_url')->nullable()->after('image');
            $table->string('audio_url')->nullable()->after('audio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('story_generators', function (Blueprint $table) {
            $table->dropColumn('image_url');
            $table->dropColumn('audio_url');
        });
    }
};
