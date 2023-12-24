<div id="most-watched-videos">
    <div class="d-flex mb-3">
        <i class="bi bi-lightning-charge-fill text-warning ms-2"></i>
        <a href="{{ url('#') }}" class="text-decoration-none text-dark">
            <h2 class="fw-bold fs-5">@lang('videos/most_watched_videos_section.most_watched_videos_page_title')</h2>
        </a>
    </div>
    <div class="row gy-3">
        @foreach ($most_watched_videos as $most_watched_video)
            <x-video-card :video="$most_watched_video"></x-video-card>
        @endforeach
    </div>
</div>
