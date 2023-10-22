<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Venosa',
            'email' => 'venosa@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(4)->create();
        Post::factory(10)->create();
        
        Category::create([
            'name' => 'Programming',
        ]);
        Category::create([
            'name' => 'Design',
        ]);
        Category::create([
            'name' => 'Comic',
        ]);
    }
}