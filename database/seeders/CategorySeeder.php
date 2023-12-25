<?php

namespace Database\Seeders;

use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'سینما' => [
                'slug' => 'cinema',
                'icon' => 'bi bi-camera-reels'
            ],
            'طنز' => [
                'slug' => 'fun',
                'icon' => 'bi bi-emoji-smile'
            ],
            'بازی' => [
                'slug' => 'game',
                'icon' => 'bi bi-controller'
            ],
            'ورزشی' => [
                'slug' => 'sport',
                'icon' => 'bi bi-person-arms-up'
            ],
            'وحشت' => [
                'slug' => 'horror',
                'icon' => 'bi bi-hash'
            ],
            'تکنولوژی' => [
                'slug' => 'technology',
                'icon' => 'bi bi-laptop'
            ],
            'تاریخی' => [
                'slug' => 'historical',
                'icon' => 'bi bi-book-half'
            ],
        ];

        foreach ($categories as $categoryName => $categoryDetail) {
            Category::create([
                'name' => $categoryName,
                'slug' => $categoryDetail['slug'],
                'icon' => $categoryDetail['icon']
            ]);
        }
    }
}
