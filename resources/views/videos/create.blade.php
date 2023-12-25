@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="mb-5">
            <h1 class="text-center fs-3">@lang('videos/create_video_form.create_video_form_title')</h1>
        </div>
        <div class="col">
            <x-validation-successes></x-validation-successes>
            <x-validation-errors></x-validation-errors>
            <div class="shadow rounded p-5">
                <form action="{{ route('videos.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name" class="form-label">@lang('videos/create_video_form.new_video_title')</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="@lang('videos/create_video_form.new_video_placeholder')" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="length" class="form-label">@lang('videos/create_video_form.new_video_length')</label>
                                    <input type="text" class="form-control" id="length" name="length" value="{{ old('length') }}" placeholder="@lang('videos/create_video_form.new_video_length_placeholder')" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="slug" class="form-label">@lang('videos/create_video_form.new_video_slug')</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" placeholder="@lang('videos/create_video_form.new_video_slug_placeholder')" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="url" class="form-label">@lang('videos/create_video_form.new_video_url')</label>
                                    <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}" placeholder="@lang('videos/create_video_form.new_video_url_placeholder')" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="thumbnail" class="form-label">@lang('videos/create_video_form.new_video_thumbnail')</label>
                                    <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="{{ old('thumbnail') }}" placeholder="@lang('videos/create_video_form.new_video_thumbnail_placeholder')" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="category_id" class="form-label">@lang('videos/create_video_form.new_video_category')</label>
                                    <select class="form-select" id="category_id" name="category_id">
                                        @foreach($categories as $categoryOption)
                                        <option value="{{ $categoryOption->id }}" {{ old('category_id') == $categoryOption->id ? 'selected' : '' }}>
                                            {{ $categoryOption->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="description" class="form-label">@lang('videos/create_video_form.new_video_description')</label>
                                    <textarea name="description" id="description" class="form-control" cols="30" rows="5" placeholder="@lang('videos/create_video_form.new_video_description_placeholder')" required>{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" type="submit">@lang('videos/create_video_form.new_video_submit_button')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection