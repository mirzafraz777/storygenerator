<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory as Faker;
use App\Models\StoryGenerator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StorySeeders extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('story_generators')->truncate(); // Clear existing records
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        $faker = Faker::create();
        $categoryIds = Category::pluck('id')->toArray(); // Get all category IDs


        for ($i = 0; $i < 30; $i++) {
            StoryGenerator::create([
                'title'       => $faker->sentence(6),
                'story'       => $faker->paragraph(5),
                'category_id' => $faker->randomElement($categoryIds), // Assign random category
                'image'       => 'stories/images/'.$faker->bothify('????-####').'.png', // Fake image URL
                'image_url'   => 'https://picsum.photos/seed/'.$faker->randomNumber().'/640/480', // Example image URL
                'audio'       => 'stories/audios/'.'audio_' . $i . '.mp3', // Example audio file name
                'audio_url'   => 'https://example.com/audio/audio_' . $i . '.mp3', // Example audio URL
            ]);
        }
    }
}
