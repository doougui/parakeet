<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $chirp->user->path() }}">
            <img
                src="{{ $chirp->user->avatar }}"
                alt="John Doe"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div class="w-full">
        <h5 class="font-bold mb-4">
            <a href="{{ $chirp->user->path() }}">
                {{ $chirp->user->name }}
            </a>
        </h5>

        <p class="text-sm mb-3">
            {{ $chirp->body }}
        </p>

        <div class="flex justify-between w-full">
            <x-like-buttons :chirp="$chirp" />

            @can('delete', $chirp)
                <a href="#" class="text-red-500 text-xs">Delete</a>
            @endcan
        </div>
    </div>
</div>
