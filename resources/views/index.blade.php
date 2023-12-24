@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="d-grid gap-5">
            <x-last-videos></x-last-videos>
            <x-most-watched-videos></x-most-watched-videos>
            <x-most-liked-videos></x-most-liked-videos>
        </div>
    </div>
@endsection
