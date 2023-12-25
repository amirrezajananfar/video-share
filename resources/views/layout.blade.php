<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('main/main_page.site_title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="site-wrapper">
        <header>
            <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark z-index-high mb-5">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" href="{{ url('') }}">@lang('main/main_page.site_title')</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <x-header-menu></x-header-menu>
                        <form class="d-flex me-auto">
                            <input class="form-control ms-2" type="search" placeholder="@lang('main/main_page.search_bar_placeholder')">
                            <button class="btn btn-warning" type="button" id="search-button">@lang('main/main_page.search_button_title')</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <div class="bg-dark mt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-center p-3">
                                <span class="text-white">@lang('main/main_page.copyright_text')</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>