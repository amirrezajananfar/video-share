@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div class="shadow rounded p-4 mb-4 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="fw-bold fs-5 lh-lg">{{ $video->name }}</h1>
                    </div>
                    <div class="mb-4">
                        <div class="mb-3">
                            <video class="rounded w-100" controls>
                                <source src="{{ $video->url }}" type="video/mp4">
                            </video>
                        </div>
                        <div>
                            <p class="lh-lg text-justify">{{ $video->description }}</p>
                        </div>
                    </div>
                    <div class="rounded p-3 p-lg-4 mb-4 bg-secondary bg-opacity-10">
                        <div class="row">
                            <div class="d-lg-flex justify-content-between">
                                <div
                                    class="d-sm-block d-lg-flex align-items-center justify-content-between my-3 my-lg-0">
                                    <div class="text-center mb-2 mb-lg-0">
                                        <span>@lang('videos/video_show.do_you_like_this_video')</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mx-lg-2">
                                        <div class="mx-1">
                                            <button class="btn btn-sm btn-success">
                                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                                @lang('videos/video_show.i_like_it')
                                            </button>
                                        </div>
                                        <div class="mx-1">
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                                @lang('videos/video_show.i_dont_like_it')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center my-3 my-lg-0">
                                    <div class="mx-2">
                                        <button class="btn btn-sm btn-outline-dark pt-2">
                                            <i class="bi bi-instagram fs-5"></i>
                                        </button>
                                    </div>
                                    <div class="mx-2">
                                        <button class="btn btn-sm btn-outline-dark pt-2">
                                            <i class="bi bi-telegram fs-5"></i>
                                        </button>
                                    </div>
                                    <div class="mx-2">
                                        <button class="btn btn-sm btn-outline-dark pt-2">
                                            <i class="bi bi-youtube fs-5"></i>
                                        </button>
                                    </div>
                                    <div class="mx-2">
                                        <button class="btn btn-sm btn-outline-dark pt-2">
                                            <i class="bi bi-twitter fs-5"></i>
                                        </button>
                                    </div>
                                    <div class="mx-2">
                                        <button class="btn btn-sm btn-outline-dark pt-2">
                                            <i class="bi bi-linkedin fs-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded p-3 mb-4 p-lg-4 bg-secondary bg-opacity-10">
                        <div class="row">
                            <div class="d-lg-flex justify-content-between">
                                <div class="d-flex align-items-center justify-content-center my-3 my-lg-0">
                                    <div class="rounded-circle bg-warning p-2 text-white text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55"
                                             fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd"
                                                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                    </div>
                                    <div class="mx-3">
                                        <span class="fw-bold">امیررضا جانانفر</span>
                                        <div class="d-flex mt-1">
                                            <span>@lang('videos/video_show.user_uploaded_videos_count')</span>
                                            <span class="mx-1">10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center my-3 my-lg-0">
                                    <div>
                                        <a class="text-decoration-none" href="#">
                                            <button
                                                class="btn btn-primary">@lang('videos/video_show.watch_all_uploaded_videos_from_this_user')</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-center border-bottom border-2 border-secondary px-1 py-3 mb-3">
                            <span class="fw-bold fs-5">@lang('videos/video_show.users_comments')</span>
                        </div>
                        <div class="rounded p-3 mb-4 p-lg-4 bg-secondary bg-opacity-10">
                            <form action="#">
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="name"
                                               class="form-label">@lang('videos/video_show.users_full_name_for_comment')</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                               placeholder="@lang('videos/video_show.users_full_name_example_for_comment')"
                                               required>
                                    </div>
                                    <div class="col">
                                        <label for="email"
                                               class="form-label">@lang('videos/video_show.users_email_address_for_comment')</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="@lang('videos/video_show.users_email_address_example_for_comment')"
                                               required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="comment"
                                               class="form-label">@lang('videos/video_show.users_comment')</label>
                                        <textarea class="form-control" name="comment" id="comment" rows="3"
                                                  placeholder="@lang('videos/video_show.users_comment_guide')"
                                                  required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <input type="submit" class="btn btn-success"
                                                   value="@lang('videos/video_show.comments_submit_button')">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="bg-secondary bg-opacity-10 rounded p-3 mb-3">
                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="rounded-circle bg-info p-2 text-white text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                             fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd"
                                                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                    </div>
                                    <div class="mx-3">
                                        <div>
                                            <span class="fw-bold">امیررضا جانانفر</span>
                                        </div>
                                        <div class="mt-1 text-muted">
                                            <small>27 شهریور 1402</small>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="lh-lg text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                        چاپ
                                        و با استفاده
                                        از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                        لازم
                                        است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-secondary bg-opacity-10 rounded p-3 mb-3">
                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="rounded-circle bg-info p-2 text-white text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                             fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd"
                                                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                    </div>
                                    <div class="mx-3">
                                        <div>
                                            <span class="fw-bold">امیررضا جانانفر</span>
                                        </div>
                                        <div class="mt-1 text-muted">
                                            <small>27 شهریور 1402</small>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="lh-lg text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                        چاپ
                                        و با استفاده
                                        از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                        لازم
                                        است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <x-related-videos :video="$video"/>
            </div>
        </div>
    </div>
@endsection
