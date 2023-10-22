<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory()
            ->count(10)
            ->sequence(
                ['name' => 'PHP'],
                ['name' => 'JavaScript'],
                ['name' => 'Vue.js'],
                ['name' => 'AWS'],
                ['name' => 'HTML'],
                ['name' => 'CSS'],
                ['name' => 'Docker'],
                ['name' => 'API'],
                ['name' => 'TDD'],
                ['name' => 'Inertia.js'],
            )
            ->create();
    }
}
