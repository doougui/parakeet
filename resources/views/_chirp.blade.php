<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $chirp->user) }}">
            <img
                src="{{ $chirp->user->avatar }}"
                alt="John Doe"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ route('profile', $chirp->user) }}">{{ $chirp->user->name }}</a>
        </h5>

        <p class="text-sm">
            {{ $chirp->body }}
        </p>
    </div>
</div>
