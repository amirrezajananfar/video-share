<?php

namespace App\View\Components;

use App\Models\Video;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class relatedVideos extends Component
{
    public $videos;

    /**
     * Create a new component instance.
     */
    public function __construct(Video $video)
    {
        $currentVideoSlug = $video->slug;
        $this->videos = $video->relatedVideos(5, $currentVideoSlug);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.related-videos');
    }
}
