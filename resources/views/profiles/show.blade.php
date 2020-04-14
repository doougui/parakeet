<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="{{ asset('images/banner.jpg') }}"
                alt="{{
                substr($user->username, -1) == 's'
                ? "{$user->username}'"
                : "{$user->username}'s"
            }} banner"
                class="mb-2"
            >

            <img
                src="{{ $user->avatar }}"
                alt="Avatar"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-xl">{{ $user->name }}</h2>
                <p class="text-sm">{{ $user->username }} -
                    Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                @if(auth()->check() && auth()->user()->username == $user->username)
                    <a href=""
                       class="rounded-full border border-gray-500 py-2 px-6 text-sm">
                        Edit Profile
                    </a>
                @else
                    <x-follow-button :user="$user"></x-follow-button>
                @endif
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Consectetur
            deleniti dicta eligendi, ex impedit iste iusto nesciunt perspiciatis
            quas recusandae repudiandae tempore temporibus, voluptate? Adipisci
            alias debitis deserunt est fugiat impedit iure iusto perspiciatis
            possimus vero. Eligendi esse illum laboriosam nihil nobis quo saepe,
        </p>

    </header>

    @include('_timeline', [
        'chirps' => $user->chirps
    ])
</x-app>
