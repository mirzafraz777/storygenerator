<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeders extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate(); // Clear existing records
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $now = now();
        $categories = [
            ["name" => "Health", "slug" => "health", "created_at" => $now, "updated_at" => $now],
            ["name" => "Technology", "slug" => "technology", "created_at" => $now, "updated_at" => $now],
            ["name" => "Sports", "slug" => "sports", "created_at" => $now, "updated_at" => $now],
            ["name" => "Fantasy", "slug" => "fantasy", "created_at" => $now, "updated_at" => $now],
            ["name" => "Business", "slug" => "business", "created_at" => $now, "updated_at" => $now],
            ["name" => "Horror", "slug" => "horror", "created_at" => $now, "updated_at" => $now],
            ["name" => "Funny", "slug" => "funny", "created_at" => $now, "updated_at" => $now],
            ["name" => "Adventure", "slug" => "adventure", "created_at" => $now, "updated_at" => $now],
            ["name" => "Informative", "slug" => "informative", "created_at" => $now, "updated_at" => $now],
            ["name" => "Documentary", "slug" => "documentary", "created_at" => $now, "updated_at" => $now],
        ];

        DB::table('categories')->insert($categories);
        // Category::factory(10)->create(); // Create 10 categories

    }
}
