<div class="col-sm-12 col-md-4 col-lg-2 d-flex">
    <div class="video-card card shadow">
        <a href="{{ route('videos.show', $video->slug) }}" class="text-decoration-none">
            <img src="{{ url($video->thumbnail) }}" class="card-img-top" alt="{{ $video->name }}">
            <span class="bg-white rounded-pill position-absolute start-0 text-secondary px-2 m-2">{{ $video->lengthInHuman }}</span>
        </a>
        <div class="card-body text-center lh-lg d-flex flex-column align-items-center justify-content-between">
            <div class="d-flex justify-content-around align-items-center mb-3">
                <div>
                    <i class="bi bi-person-fill text-warning"></i>
                    <span class="ms-1">@lang('videos/video_card.video_card_author_sample_name')</span>
                </div>
                <div>
                    <i class="bi bi-clock-history text-warning"></i>
                    <span class="ms-1">{{ $video->created_at }}</span>
                </div>
            </div>
            <a href="{{ route('videos.show', $video->slug) }}" class="text-decoration-none text-dark">
                <h5 class="card-title mb-3">{{ $video->name }}</h5>
            </a>
            <p class="card-text mb-3">{{ $video->description }}</p>
            <a href="{{ route('videos.show', $video->slug) }}" class="btn btn-primary">@lang('videos/video_card.video_card_more_information_button')</a>
        </div>
    </div>
</div>