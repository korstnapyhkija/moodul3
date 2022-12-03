<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => 'https://picsum.photos/seed/'.fake()->uuid.'/300/200',
            'name' => fake()->word,
            'description' => fake()->paragraph,
            'platform' => fake()->randomElement(['PC', 'Xbox', 'Playstation', 'Switch']),
            'code' => fake()->ean13(),
            'price' => fake()->numberBetween(20, 150)
        ];
    }
}
