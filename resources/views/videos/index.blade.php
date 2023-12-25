@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="d-flex mb-3">
        <i class="bi bi-lightning-charge-fill text-warning ms-2"></i>
        <a href="{{ url('#') }}" class="text-decoration-none text-dark">
            <h2 class="fw-bold fs-5">@lang('videos/videos_list.video_card_category_perfix') {{ $categoryName }}</h2>
        </a>
    </div>
    <div class="d-grid gap-5">
        <div class="row gy-3">
            @foreach ($videos as $video)
            <x-video-card :video="$video"></x-video-card>
            @endforeach
        </div>
    </div>
</div>
@endsection