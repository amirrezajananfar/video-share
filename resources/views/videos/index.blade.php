<x-layout>
    <x-slot name="content">
        <div id="all-output" class="col-md-12">
            <div class="row">
                @foreach($videos as $video)
                <x-video-box :video="$video" />
                @endforeach
            </div>
            <div class="row text-center mx-auto">
                {{ $videos->links() }}
            </div>
        </div>
    </x-slot>
</x-layout>