<div id="last-videos">
    <div class="d-flex mb-3">
        <i class="bi bi-lightning-charge-fill text-warning ms-2"></i>
        <a href="{{ url('#') }}" class="text-decoration-none text-dark">
            <h2 class="fw-bold fs-5">@lang('videos/last_videos_section.last_videos_page_title')</h2>
        </a>
    </div>
    <div class="row gy-3">
        @foreach ($last_videos as $last_video)
            <x-video-card :video="$last_video"></x-video-card>
        @endforeach
    </div>
</div>
