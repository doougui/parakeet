<div class="bg-green-100 rounded-lg p-4">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @auth
            @foreach(auth()->user()->follows as $user)
                <li class="mb-4">
                    <div class="flex items-center text-sm">
                        <img
                            src="{{ $user->avatar }}"
                            alt="John Doe"
                            class="rounded-full mr-2"
                        >

                        {{ $user->name }}
                    </div>
                </li>
            @endforeach
        @endauth
    </ul>
</div>
