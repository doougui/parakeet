<x-app>
    <div>
        @foreach($users as $user)
            <div class="flex items-center justify-between mb-5">
                <a href="{{ $user->path() }}">
                    <div class="flex items-center">
                        <img
                            src="{{ $user->avatar }}"
                            alt="{{ $user->username }}'s avatar"
                            width="60"
                            class="mr-4 rounded"
                        >

                        <div>
                            <h3 class="font-bold">{{ $user->name }}</h3>
                            <h5 class="font-thin text-sm">{{ '@'.$user->username }}</h5>
                        </div>
                    </div>
                </a>

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        @endforeach

        {{ $users->links() }}
    </div>
</x-app>
