<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'icon' => 'bi-code-slash',
            'title' => fake()->sentence(3),
            'short_desc' => fake()->sentence(),
            'description' => fake()->paragraphs(3, true),
            'features' => fake()->randomElements(['Feature A', 'Feature B', 'Feature C', 'Feature D'], rand(2, 4)),
            'sort_order' => fake()->numberBetween(0, 10),
        ];
    }
}
