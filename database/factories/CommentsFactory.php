<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rand = rand(2, 6);
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'massage' => fake()->paragraph($rand),
            'article_id' => 0,
            'created_at' => time(),
            'updated_at' => null,
        ];
    }
}
