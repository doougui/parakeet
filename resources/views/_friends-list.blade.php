<div class="bg-green-100 rounded-xl p-4">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
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
    </ul>
</div>
