<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     // User::factory()->create([
    //     //     'name' => 'Test User',
    //     //     'email' => 'test@example.com',
    //     // ]);

    //     Article::factory()->count(20)->create();
    //     Category::factory()->count(5)->create();
    //     Comment::factory()->count(40)->create();

    //     // Create Users first
    // // \App\Models\User::factory(5)->create();

    // // // Create Articles next
    // // \App\Models\Article::factory(20)->create();

    // // // Finally create Comments
    // // \App\Models\Comment::factory(50)->create()

    //     // $categories = Category::factory(5)->create();

    // // 2. Create Articles and give each one a random ID from the categories above
    //     // Article::factory(20)->create([
    //     // 'category_id' => $categories->random()->id,
    //     // ]);

    //     User::factory()->create([
    //         "name" => "Alice",
    //         "email" => "alice@gmail.com",
    //     ]);

    //     User::factory()->create([
    //         "name" => "Bob",
    //         "email" => "bob@gmail.com",
    //     ]);
    // }

    public function run(): void
    {
        // 1. Create Users FIRST
        // This creates User ID 1 and User ID 2
        User::factory()->create([
            "name" => "Alice",
            "email" => "alice@gmail.com",
        ]);

        User::factory()->create([
            "name" => "Bob",
            "email" => "bob@gmail.com",
        ]);

        // 2. Create Categories
        Category::factory()->count(5)->create();

        // 3. Create Articles 
        Article::factory()->count(20)->create();

        // 4. Create Comments LAST
        // Now rand(1, 2) inside your Factory will find Alice or Bob
        Comment::factory()->count(40)->create();
    }
}
