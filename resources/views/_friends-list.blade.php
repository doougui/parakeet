<div class="bg-green-100 rounded-xl p-4">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @auth
            @foreach(auth()->user()->follows as $user)
                <li class="mb-4">
                    <div>
                        <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                            <img
                                src="{{ $user->avatar }}"
                                alt="John Doe"
                                class="rounded-full mr-2"
                                width="40"
                                height="40"
                            >

                            {{ $user->name }}
                        </a>
                    </div>
                </li>
            @endforeach
        @else
            <p class="text-sm text-secondary">Log-in to see the people you follow</p>
        @endauth
    </ul>
</div>
