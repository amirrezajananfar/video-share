<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::paginate(12);
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('videos.create', compact('categories'));
    }

    public function store(StoreVideoRequest $request)
    {
        $request->user()->video()->create($request->all());
        return redirect()->route('index')->with('status', __('messages.success'));
    }

    public function show(Request $request, Video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function edit(Request $request, Video $video)
    {
        $categories = Category::all();
        return view('videos.edit', compact('video', 'categories'));
    }

    public function update(UpdateVideoRequest $request, Video $video)
    {
        $video->update($request->all());
        return redirect()->route('videos.show', $video->slug)->with('status', __('messages.success'));
    }
}
