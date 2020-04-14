@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img
            src="{{ asset('images/banner.jpg') }}"
            alt="{{
                (substr($user->username, -1) == 's')
                ? "{$user->username}'"
                : "{$user->username}'s"
            }} banner"
            class="mb-2"
        >

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-xl">{{ $user->name }}</h2>
                <p class="text-sm">{{ $user->username }} -
                    Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                @if(!auth()->guest() && auth()->user()->username == $user->username)
                    <a href=""
                       class="rounded-full border border-gray-500 py-2 px-6 text-sm">
                        Edit Profile
                    </a>
                @else
                    <button class="bg-green-500 rounded-full shadow py-2 px-6 text-white text-sm
                        {{ auth()->guest() ? 'opacity-50 cursor-default' : '' }}"
                        {{ auth()->guest() ? 'disabled' : '' }}
                    >
                        Follow
                    </button>
                @endif
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur
            deleniti dicta eligendi, ex impedit iste iusto nesciunt perspiciatis
            quas recusandae repudiandae tempore temporibus, voluptate? Adipisci
            alias debitis deserunt est fugiat impedit iure iusto perspiciatis
            possimus vero. Eligendi esse illum laboriosam nihil nobis quo saepe,
        </p>

        <img
            src="{{ $user->avatar }}"
            alt="Avatar"
            class="rounded-full mr-2 absolute"
            style="max-width: 150px; left: calc(50% - 75px); top: 130px;"
        >

    </header>

    @include('_timeline', [
        'chirps' => $user->chirps
    ])
@endsection
