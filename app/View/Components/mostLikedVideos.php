<?php

namespace App\View\Components;

use App\Models\Video;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mostLikedVideos extends Component
{
    public $most_liked_videos;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        return $this->most_liked_videos = Video::all()->random(6);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.most-liked-videos');
    }
}
