<x-layout>
    <x-slot name="content">
        <x-validation-error />
        <div id="all-output" class="col-md-12 upload">
            <div id="upload">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="page-title">
                            <span>آپلود</span> ویدیو
                        </h1>
                        <form action="{{ route('videos.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>@lang('videos.title')</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="@lang('videos.title')">
                                </div>
                                <div class="col-md-6">
                                    <label>@lang('videos.length')</label>
                                    <input type="text" class="form-control" name="length" value="{{ old('length') }}" placeholder="@lang('videos.length')">
                                </div>
                                <div class="col-md-6">
                                    <label>@lang('videos.slug')</label>
                                    <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" placeholder="@lang('videos.slug')">
                                </div>
                                <div class="col-md-6">
                                    <label>@lang('videos.url')</label>
                                    <input type="text" class="form-control" name="url" value="{{ old('url') }}" placeholder="@lang('videos.url')">
                                </div>
                                <div class="col-md-6">
                                    <label>@lang('videos.thumbnail')</label>
                                    <input type="text" class="form-control" name="thumbnail" value="{{ old('thumbnail') }}" placeholder="@lang('videos.thumbnail')">
                                </div>
                                <div class="col-md-6">
                                    <label>@lang('videos.category')</label>
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label>@lang('videos.description')</label>
                                    <textarea class="form-control" rows="4" name="description" placeholder="@lang('videos.description')">{{ old('description') }}</textarea>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" class="btn btn-dm" value="@lang('videos.submit')">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ Vite::asset('resources/images/upload-adv.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>