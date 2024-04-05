<div class="col-lg-2 col-md-4 col-sm-6">
    <div class="video-item">
        <div class="thumb">
            <small class="time">{{ $video->lengthInHuman }}</small>
            <a href="{{ route('videos.show', $video->slug) }}">
                <img src="{{ $video->thumbnail }}" alt="{{ $video->title }}">
            </a>
        </div>
        <div class="video-info">
            <a href="{{ route('videos.show', $video->slug) }}" class="title">{{ $video->title }}</a>
            <a class="channel-name" href="#">مهرداد سامی
                <span>
                    <i class="fa fa-check-circle"></i>
                </span>
            </a>
            <span class="views">
                <i class="fa fa-eye"></i>2.8M بازدید
            </span>
            <span class="date">
                <i class="fa fa-clock-o"></i>{{ $video->created_at }}
            </span>
            @if ($video->category?->title)
            <span class="date">
                <i class="fa fa-tag"></i>{{ $video->category->title }}
            </span>
            @endif
        </div>
    </div>
</div>