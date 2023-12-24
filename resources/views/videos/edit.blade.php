@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="mb-5">
            <h1 class="text-center fs-3">@lang('videos/edit_video_form.edit_video_form_title')</h1>
        </div>
        <div class="col">
            <x-validation-successes></x-validation-successes>
            <x-validation-errors></x-validation-errors>
            <div class="shadow rounded p-5">
                <form action="{{ route('videos.update', $video->slug) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name" class="form-label">@lang('videos/edit_video_form.edit_video_title')</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="@lang('videos/edit_video_form.edit_video_placeholder')" value="{{ $video->name }}" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="length" class="form-label">@lang('videos/edit_video_form.edit_video_length')</label>
                                    <input type="text" class="form-control" id="length" name="length" placeholder="@lang('videos/edit_video_form.edit_video_length_placeholder')" value="{{ $video->length }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="slug" class="form-label">@lang('videos/edit_video_form.edit_video_slug')</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="@lang('videos/edit_video_form.edit_video_slug_placeholder')" value="{{ $video->slug }}" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="url" class="form-label">@lang('videos/edit_video_form.edit_video_url')</label>
                                    <input type="text" class="form-control" id="url" name="url" placeholder="@lang('videos/edit_video_form.edit_video_url_placeholder')" value="{{ $video->url }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="thumbnail" class="form-label">@lang('videos/edit_video_form.edit_video_thumbnail')</label>
                                    <input type="text" class="form-control" id="thumbnail" name="thumbnail" placeholder="@lang('videos/edit_video_form.edit_video_thumbnail_placeholder')" value="{{ $video->thumbnail }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="description" class="form-label">@lang('videos/edit_video_form.edit_video_description')</label>
                                    <textarea name="description" id="description" class="form-control" cols="30" rows="5" placeholder="@lang('videos/edit_video_form.edit_video_description_placeholder')" required>{{ $video->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" type="submit">@lang('videos/edit_video_form.edit_video_submit_button')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection