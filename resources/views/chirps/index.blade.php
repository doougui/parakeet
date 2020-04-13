@extends('layouts.app')

@section('content')
    @include('_publish-chirp-panel')

    <div class="border border-gray-300 rounded-lg">
        @foreach($chirps as $chirp)
            @include('_chirp')
        @endforeach
    </div>
@endsection
