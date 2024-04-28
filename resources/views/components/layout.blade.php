<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Share</title>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
    @vite(['resources/css/bootstrap.css', 'resources/css/styles.css', 'resources/css/responsive.css', 'resources/js/scripts.js'])
</head>

<body>
    <header>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <a id="main-category-toggler" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-close"></i>
                    </a>
                    <div id="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">
                    <div class="search-form">
                        <form id="search" action="#" method="post">
                            <input type="text" placeholder="جستجو ..." />
                            <input type="submit" value="Keywords" />
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm"></div>
                <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs hidden-sm"></div>
                @auth
                <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                    <div class="dropdown">
                        <a data-toggle="dropdown" href="#" class="user-area">
                            <div class="thumb">
                                <img src="{{ auth()->user()->gravatar }}" alt="{{ auth()->user()->name }}">
                            </div>
                            <h2>{{ auth()->user()->name }}</h2>
                            <h3>25 اشتراک</h3>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu account-menu">
                            <li>
                                <a href="{{ route('profile.edit') }}">
                                    <i class="fa fa-edit color-1"></i>
                                    ویرایش پروفایل
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('videos.create') }}">
                                    <i class="fa fa-video-camera color-2"></i>
                                    اضافه کردن فیلم
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}">
                                    <i class="fa fa-sign-out color-4"></i>
                                    خروج
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endauth
                @guest
                <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                    <a href="{{ url('login') }}">
                        <button class="btn btn-white">
                            <i class="fa fa-user"></i>
                            حساب کاربری
                        </button>
                    </a>
                </div>
                @endguest
            </div>
        </div>
    </header>

    <x-header-menu />

    <div class="site-output">
        @if (session('status'))
        <div class="alert alert-success"> {{ session('status') }}</div>
        @endif
        {{ $content ?? '' }}
    </div>
</body>

</html>