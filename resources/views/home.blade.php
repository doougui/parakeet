@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-center">
        <div class="lg:w-32">
            @include('_sidebar-links')
        </div>

        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
            @include('_publish-chirp-panel')

            <div class="border border-gray-300 rounded-lg">
                @foreach($chirps as $chirp)
                    @include('_chirp')
                @endforeach
            </div>
        </div>

        <div class="lg:w-1/6 bg-green-100 rounded-lg p-4">
            @include('_friends-list')
        </div>
    </div>
@endsection
