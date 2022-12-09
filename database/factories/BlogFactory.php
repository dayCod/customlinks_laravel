<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $data = array();

        for($i=0; $i < 20; $i++) {
            $data[] = [
                'title' => fake()->sentence(2),
                'content' => fake()->text(200),
                'route_id' => rand(1,4),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        return $data;
    }
}
