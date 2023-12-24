<div id="most-liked-videos">
    <div class="d-flex mb-3">
        <i class="bi bi-lightning-charge-fill text-warning ms-2"></i>
        <a href="{{ url('#') }}" class="text-decoration-none text-dark">
            <h2 class="fw-bold fs-5">@lang('videos/most_liked_videos_section.most_liked_videos_page_title')</h2>
        </a>
    </div>
    <div class="row gy-3">
        @foreach ($most_liked_videos as $most_liked_video)
            <x-video-card :video="$most_liked_video"></x-video-card>
        @endforeach
    </div>
</div>
