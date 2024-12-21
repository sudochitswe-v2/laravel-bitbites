<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cuisine;
use App\Models\DietaryPreference;
use App\Models\Difficulty;
use App\Models\Favouriate;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\RecipeDietaryPreference;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::factory()->create([
            'name' => 'User',
            'value' => 1,
        ]);
        Role::factory()->create([
            'name' => 'Admin',
            'value' => 2
        ]);
        User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => '',
            'name' => 'Admin',
            'email' => 'admin@blendingbites.net',
            'role_id' => 2
        ]);
        User::factory()->count(15)->create();

        Difficulty::factory()->create([
            'name' => 'Easy',
            'value' => 1
        ]);
        Difficulty::factory()->create([
            'name' => 'Normal',
            'value' => 2
        ]);
        Difficulty::factory()->create([
            'name' => 'Hard',
            'value' => 3
        ]);
        Difficulty::factory()->create([
            'name' => 'Challenging',
            'value' => 4
        ]);
        
        Cuisine::factory()->count(14)->create();
        DietaryPreference::factory()->count(14)->create();
        Recipe::factory()->count(35)->create();
        Ingredient::factory()->count(100)->create();
        Favouriate::factory()->count(50)->create();
        RecipeDietaryPreference::factory()->count(30)->create();
    }
}
