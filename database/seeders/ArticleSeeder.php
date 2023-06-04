<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        if (Article::count() == 0) {



            \App\Models\Article::factory(10)->create()->make();


//            for ($i = 1; $i <= 10; $i++) {
//
//                $rand = rand(0, 1);
//                $randImage = $rand ? fake()->imageUrl : null;
//
//                Article::create([
//                    'title' => "Article $i",
//                    'slug' => fake()->text(20),
//                    'text' => fake()->text(100),
//                    'image' => $randImage
//
//                ]);
//
//            }

        }
//    }
}
