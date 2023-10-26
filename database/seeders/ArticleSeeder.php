<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Article::factory(1000)->create();

        $articles->each(function ($article)  {
            $article->tags()->saveMany(
                Tag::inRandomOrder()
                    ->limit(random_int(1, 5))
                    ->get()
            );
        });
    }
}
