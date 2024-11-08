<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'create@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'create'
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'read@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'read'
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'update@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'update'
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'delete@gmail.com',
            'password' => Hash::make('123456'),
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
