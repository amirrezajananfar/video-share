<div id="main-category">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12">
                <ul class="main-category-menu">
                    @foreach($categories as $category)
                    <li class="{{ Request::is('*/' . $category->slug . '/*') ? 'color-2' : 'color-3' }}">
                        <a href="{{ route('categories.videos.index', $category->slug) }}">
                            <i class="fa {{ $category->icon }}"></i>
                            {{ $category->title }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>