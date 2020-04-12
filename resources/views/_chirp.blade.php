<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <img
            src="{{ $chirp->user->avatar }}"
            alt="John Doe"
            class="rounded-full mr-2"
        >
    </div>

    <div>
        <h5 class="font-bold mb-4">{{ $chirp->user->name }}</h5>

        <p class="text-sm">
            {{ $chirp->body }}
        </p>
    </div>
</div>
