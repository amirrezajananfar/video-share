<x-layout>
    <x-slot name="content">
        <div id="all-output" class="col-md-12">
            <h1 class="new-video-title">
                <i class="fa fa-bolt"></i>
                آخرین ویدیو‌ها
            </h1>
            <div class="row">
                @foreach($latestVideos as $video)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <small class="time">{{ $video->length }}</small>
                            <a href="{{ url($video->slug) }}">
                                <img src="{{ $video->thumbnail }}" alt="{{ $video->title }}">
                            </a>
                        </div>
                        <div class="video-info">
                            <a href="{{ url($video->slug) }}" class="title">{{ $video->title }}</a>
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
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <h1 class="new-video-title">
                <i class="fa fa-bolt"></i>
                پربازدیدترین ویدیوها
            </h1>
            <div class="row">
                @foreach($mostViewedVideos as $video)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <small class="time">{{ $video->length }}</small>
                            <a href="{{ url($video->slug) }}">
                                <img src="{{ $video->thumbnail }}" alt="{{ $video->title }}">
                            </a>
                        </div>
                        <div class="video-info">
                            <a href="{{ url($video->slug) }}" class="title">{{ $video->title }}</a>
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
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <h1 class="new-video-title">
                <i class="fa fa-bolt"></i>
                محبوب‌ترین‌ها
            </h1>
            <div class="row">
                @foreach($mostPopularVideos as $video)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <small class="time">{{ $video->length }}</small>
                            <a href="{{ url($video->slug) }}">
                                <img src="{{ $video->thumbnail }}" alt="{{ $video->title }}">
                            </a>
                        </div>
                        <div class="video-info">
                            <a href="{{ url($video->slug) }}" class="title">{{ $video->title }}</a>
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
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </x-slot>
</x-layout>