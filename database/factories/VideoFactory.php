<?php

namespace Database\Factories;

use App\Models\Category;
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
        return [
            'title' => $this->faker->name(),
            'slug' => $this->faker->slug(3),
            'length' => $this->faker->randomNumber(3),
            'url' => 'https://sample-videos.com/video321/mp4/720/big_buck_bunny_720p_1mb.mp4',
            'description' => $this->faker->realText(),
            'thumbnail' => 'https://wallpaperswide.com/download/mountain_lake_landscape_nature-wallpaper-1920x1080.jpg',
            'category_id' => Category::inRandomOrder()->first() ?? Category::factory()
        ];
    }
}
