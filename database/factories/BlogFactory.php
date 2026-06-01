<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        $title = fake()->sentence(5);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'category' => fake()->randomElement(['Web Development', 'Mobile', 'Technology']),
            'author' => fake()->name(),
            'excerpt' => fake()->sentence(),
            'content' => fake()->paragraphs(5, true),
            'image' => null,
            'read_time' => fake()->numberBetween(3, 10) . ' min read',
            'date' => fake()->date(),
        ];
    }
}
