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
            <a class="channel-name" href="#">
                <i class="fa fa-user"></i>
                {{ $video->author_name }}
            </a>
            <span class="date">
                <i class="fa fa-clock-o"></i>{{ $video->created_at }}
            </span>
            @if ($video->category?->title)
            <a href="{{ route('categories.videos.index', $video->category->slug) }}">
                <span class="date">
                    <i class="fa fa-tag"></i>{{ $video->category->title }}
                </span>
            </a>
            @endif
        </div>
    </div>
</div>