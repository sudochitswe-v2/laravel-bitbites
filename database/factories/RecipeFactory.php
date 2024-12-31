<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->colorName() . $this->faker->firstNameFemale,
            'image' => $this->faker->imageUrl(category: 'food'),
            'short_description' => $this->faker->colorName() . $this->faker->firstNameFemale,
            'description' => $this->faker->paragraph(2),
            'cuisine_id' => rand(1, 4),
            'difficulty_id' => rand(1, 4),
            'ingredients_description' => $this->faker->randomHtml(1,1),
        ];
    }
}
