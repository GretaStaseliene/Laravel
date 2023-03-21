<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(rand(4, 8)),
            'content' => '<p>' . implode('</p><p>', fake()->paragraphs(rand(1, 15))) . '</p>',
            'photo' => 'https://picsum.photos/1024/600?q=' . rand(0, 5000),
            'comments_count' => rand(0, 30),
            'user_id' => rand(1, 11)
        ];
    }
}
