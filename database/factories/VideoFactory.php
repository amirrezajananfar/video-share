<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
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
            'url' => $this->faker->url(),
            'length' => $this->faker->randomNumber(4, true),
            'slug' => $this->faker->slug(3),
            'description' => $persianFaker->realText(),
            'thumbnail' => 'https://loremflickr.com/1920/1080/world?random=' . rand(1, 99)
        ];
    }
}
