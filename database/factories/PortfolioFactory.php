<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    protected $model = Portfolio::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'category' => fake()->randomElement(['web', 'android', 'desktop', 'saas']),
            'description' => fake()->paragraphs(3, true),
            'icon' => 'bi-briefcase',
            'client' => fake()->company(),
            'year' => fake()->year(),
            'tech' => fake()->randomElements(['Laravel', 'Vue.js', 'React', 'MySQL', 'Docker'], rand(2, 4)),
            'images' => null,
            'sort_order' => fake()->numberBetween(0, 10),
        ];
    }
}
