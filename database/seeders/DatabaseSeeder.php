<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       
        User::create([
            'username' => 'branislav', 
            'password' => Hash::make('branislav')
        
        ]);
        Category::create([
            'name' => 'Sport'
        ]);
        Category::create([
            'name' => 'Finansije'
        ]);
        Category::create([
            'name' => 'Manifestacije'
        ]);
    }
}
