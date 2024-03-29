<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Post::factory(10)->create();
        Comment::factory(10)->create();

        $categories = [
            'Fashion',
            'Travel',
            'Food',
            'Health',
            'Technology',
            'Lifestyle',
            'DIY',
            'Photography',
            'Books',
            'Business'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
