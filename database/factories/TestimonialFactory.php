<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'role' => fake()->jobTitle(),
            'company' => fake()->company(),
            'initials' => strtoupper(substr(fake()->name(), 0, 2)),
            'rating' => fake()->numberBetween(4, 5),
            'quote' => fake()->paragraph(),
        ];
    }
}
