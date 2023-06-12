<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {
        $rand = rand(1, Category::all()->count());

        return [
            'name' => fake()->word(),
            'category_id' => $rand,
            'price' => fake()->randomFloat(2, 1, 100),
            'image' => fake()->imageUrl(360, 360, 'products'),

        ];
    }
}
