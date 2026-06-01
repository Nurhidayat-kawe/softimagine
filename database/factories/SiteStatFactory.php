<?php

namespace Database\Factories;

use App\Models\SiteStat;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteStatFactory extends Factory
{
    protected $model = SiteStat::class;

    public function definition(): array
    {
        return [
            'label' => fake()->randomElement(['Projects', 'Clients', 'Team', 'Experience']),
            'value' => (string) fake()->numberBetween(10, 999),
        ];
    }
}
