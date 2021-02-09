<div class="bg-green-200 border-gray-400 rounded-xl p-4">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @auth
            @forelse(currentUser()->follows as $user)
                <li class="{{ $loop->last ? '' : 'mb-4' }}">
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
            @empty
                <li>No friends yet.</li>
            @endforelse
        @else
            <p><a href="{{ route('login') }}">Log-in</a> to see the people you follow.</p>
        @endauth
    </ul>
</div>
