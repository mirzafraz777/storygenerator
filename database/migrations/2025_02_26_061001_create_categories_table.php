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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD:database/migrations/2025_02_16_181018_alter_table_storygenerator_add_column_category.php
        Schema::table('story_generators', function (Blueprint $table) {
            $table->dropColumn('category');
        });
=======
        Schema::dropIfExists('categories');
>>>>>>> 71e712cf985e1cfceb8094c4c9b37d657a3a9918:database/migrations/2025_02_26_061001_create_categories_table.php
    }
};
