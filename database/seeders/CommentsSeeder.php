<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $articles = Article::all();

        if (Comments::count() == 0) {

            foreach ($articles as $article) {
                $rand = rand(0, 5);
                Comments::factory()->count($rand)->state(['article_id' => $article->id])->create();
            }

        }
    }
}
