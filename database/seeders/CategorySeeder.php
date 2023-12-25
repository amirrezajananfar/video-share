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
                'icon' => 'fa fa-film'
            ],
            'طنز' => [
                'slug' => 'fun',
                'icon' => 'fa fa-smile-o'
            ],
            'بازی' => [
                'slug' => 'game',
                'icon' => 'fa fa-gamepad'
            ],
            'ورزشی' => [
                'slug' => 'sport',
                'icon' => 'fa fa-futbol-o'
            ],
            'وحشت' => [
                'slug' => 'horror',
                'icon' => 'fa fa-hashtag'
            ],
            'تکنولوژی' => [
                'slug' => 'technology',
                'icon' => 'fa fa-laptop'
            ],
            'تاریخی' => [
                'slug' => 'historical',
                'icon' => 'fa fa-university'
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
