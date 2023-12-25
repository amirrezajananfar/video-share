<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $persianFaker = \Faker\Factory::create('fa_IR');
        return [
            'name' => $persianFaker->name(),
            'slug' => $this->faker->slug(3),
            'description' => $persianFaker->realText(),
            'icon' => $this->faker->word()
        ];
    }
}
