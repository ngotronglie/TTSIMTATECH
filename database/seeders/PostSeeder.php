<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 10; $i++) {
            \App\Models\Post::factory()->create([
                'user_id' => 1,
                'category_id' => rand(1, 5),
                'title' => 'Post ' . $i,
                'slug' => 'post-' . $i,
                'content' => 'Content of post ' . $i,
                'is_active' => 1,
            ]);
        }
    }
}
