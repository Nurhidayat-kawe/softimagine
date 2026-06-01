<?php

namespace Database\Factories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamMemberFactory extends Factory
{
    protected $model = TeamMember::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'role' => fake()->jobTitle(),
            'initials' => strtoupper(substr(fake()->name(), 0, 2)),
            'phone' => fake()->phoneNumber(),
            'skills' => fake()->randomElements(['PHP', 'Laravel', 'Vue.js', 'Kotlin', 'Flutter', 'MySQL'], rand(2, 4)),
            'sort_order' => fake()->numberBetween(0, 10),
        ];
    }
}
