<?php

namespace Database\Seeders;

use App\Models\Articles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Articles::count() == 0) {


            for ($i = 1; $i <= 10; $i++) {

                $rand = rand(0, 1);
                $randImage = $rand ? fake()->imageUrl : null;

                Articles::create([
                    'title' => "Article $i",
                    'slug' => fake()->text(20),
                    'text' => fake()->text(100),
                    'image' => $randImage

                ]);

            }

        }
    }
}
