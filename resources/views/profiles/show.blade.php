<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="{{ $user->banner }}"
                alt="{{ "{$user->username}'s" }} banner"
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
            <div style="max-width: 270px;">
                <h2 class="font-bold text-xl">{{ $user->name }}</h2>
                <p class="text-sm">{{ $user->username }} -
                    Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            {{ $user->bio ?: "I'm a mysterious person and didn't provide a bio 🕵️" }}
        </p>

    </header>

    @include('_timeline', [
        'chirps' => $chirps
    ])
</x-app>
