<div id="related-posts">
    @foreach($videos as $video)
    <div class="related-video-item">
        <div class="thumb">
            <small class="time">{{ $video->length }}</small>
            <a href="{{ route('videos.show', $video->slug) }}">
                <img src="{{ $video->thumbnail }}" alt="">
            </a>
        </div>
        <a href="{{ route('videos.show', $video->slug) }}" class="title">{{ $video->title }}</a>
        <a class="channel-name" href="#">داود طاهری
            <span>
                <i class="fa fa-check-circle"></i>
            </span>
        </a>
        <p>{{ Str::limit($video->description, 45) }}</p>
    </div>
    @endforeach
</div>