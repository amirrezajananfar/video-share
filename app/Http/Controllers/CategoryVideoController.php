<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryVideoController extends Controller
{
    public function index(Category $category)
    {
        $videos = $category->videos()->paginate();
        $categoryName = $category->name;
        $categorySlug = $category->slug;
        return view('videos.index', compact('videos', 'categoryName', 'categorySlug'));
    }
}
