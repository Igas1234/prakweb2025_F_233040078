<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
  public function run(): void
{
    // 5 users
    \App\Models\User::factory(5)->create();

    // 2 categories
    \App\Models\Category::factory()->create([
        'name' => 'Programming',
        'slug' => 'programming'
    ]);

    \App\Models\Category::factory()->create([
        'name' => 'Design',
        'slug' => 'design'
    ]);

    // 10 posts
    \App\Models\Post::factory(10)->create();
}
}
