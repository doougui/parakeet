@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="flex-1">
            @include('_sidebar-links')
        </div>
        <div class="flex-1">2</div>
        <div class="flex-1">3</div>
    </div>
@endsection
