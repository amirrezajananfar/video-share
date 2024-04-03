<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $latestVideos = Video::latest()->take(6)->get();
        $mostViewedVideos = Video::all()->random(6);
        $mostPopularVideos = Video::all()->random(6);

        $dataCollection = compact('latestVideos', 'mostViewedVideos', 'mostPopularVideos');

        return view('index', $dataCollection);
    }
}
