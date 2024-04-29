<div id="related-posts">
    @foreach($videos as $video)
    <div class="related-video-item">
        <div class="thumb">
            <small class="time">{{ $video->lengthInHuman }}</small>
            <a href="{{ route('videos.show', $video->slug) }}">
                <img src="{{ $video->thumbnail }}" alt="">
            </a>
        </div>
        <a href="{{ route('videos.show', $video->slug) }}" class="title">{{ $video->title }}</a>
        <div style="display: flex;gap: 5px;">
            <a class="channel-name" href="#">
                <span>
                    <i class="fa fa-user"></i> {{ $video->author_name }}
                </span>
            </a>
            @if ($video->category?->title)
            <a class="channel-name" href="{{ route('categories.videos.index', $video->category->slug) }}">
                <span>
                    <i class="fa fa-tag"></i> {{ $video->category->title }}
                </span>
            </a>
            @endif
        </div>
        <p>{{ Str::limit($video->description, 45) }}</p>
    </div>
    @endforeach
</div>