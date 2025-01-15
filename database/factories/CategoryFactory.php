<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'name' => $this->faker->word, // Random word for category name
            'description' => $this->faker->sentence(10), // Random sentence for description
            'slug' => Str::slug($this->faker->word), // Convert random word to a slug
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
