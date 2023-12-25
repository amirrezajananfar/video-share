<ul class="navbar-nav mb-2 mb-lg-0">
    @foreach($categories as $category)
    <li class="nav-item ms-4">
        @if(isset(separatedUri()[2]) && separatedUri()[2] == $category->slug)
        <a class="nav-link active" href="{{ route('categories.videos.index', $category->slug) }}">
            <i class="{{ $category->icon }}"></i>
            {{ $category->name }}
        </a>
        @else
        <a class="nav-link" href="{{ route('categories.videos.index', $category->slug) }}">
            <i class="{{ $category->icon }}"></i>
            {{ $category->name }}
        </a>
        @endif
    </li>
    @endforeach
</ul>