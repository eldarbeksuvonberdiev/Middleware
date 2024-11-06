<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'create@gmail.com',
            'role' => 'create'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'read@gmail.com',
            'role' => 'read'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'update@gmail.com',
            'role' => 'update'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'delete@gmail.com',
            'role' => 'delete'
        ]);

        for ($i=1; $i <= 10; $i++) { 
            Student::create([
                'first_name' => fake()->firstName(),
                'last_name' =>fake()->lastName(),
                'birth_date' => fake()->date(),
                'gender' => 'male',
                'email' => fake()->email(),
                'phone' => fake()->phoneNumber(),
            ]);
        }

        for ($i=1; $i <= 10; $i++) { 
            Post::create([
                'title' => fake()->title(),
                'description' => fake()->text(150),
                'text' => fake()->text(200),
                'image' => 'images/1.jpg'
            ]);
        }
    }
}
