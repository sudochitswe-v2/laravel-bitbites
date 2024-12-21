<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'recipe_id' => rand(1, 35),
            'unit' => $this->faker->randomElement(['kg', 'g', 'ml', 'l', 'piece']),
            'quantity' => rand(5, 99),
        ];
    }
}
