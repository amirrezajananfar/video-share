<div class="rounded shadow p-4 sticky-top top-px-80">
    <div class="text-center bg-warning rounded px-1 py-3 mb-3">
        <span class="fw-bold fs-5">@lang('videos/video_show.other_videos')</span>
    </div>
    @foreach($videos as $video)
        <div class="bg-secondary bg-opacity-10 rounded mb-3 p-2">
            <div class="d-flex align-items-center justify-content-start">
                <div class="col-5">
                    <a href="{{ route('videos.show', $video->slug) }}">
                        <img src="{{ $video->thumbnail  }}" alt="Alt Text" class="img-fluid rounded">
                    </a>
                </div>
                <div class="col-7">
                    <div class="me-2">
                        <div class="mb-2">
                            <span class="fw-bold">{{ $video->name  }}</span>
                        </div>
                        <div class="ellipsis-text">
                            <span>{{ $video->description  }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
