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
                            <h4 class="font-thin">{{ '@'.$user->username }}</h4>
                        </div>
                    </div>
                </a>

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        @endforeach

        {{ $users->links() }}
    </div>
</x-app>
