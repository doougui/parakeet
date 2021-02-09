@can('edit', $user)
    <a href="{{ route('profile.edit') }}"
       class="rounded-full border border-gray-500 py-2 px-6 text-sm">
        Edit Profile
    </a>
@else
    <form method="POST" action="{{ route('follow', $user) }}">
        @csrf

        <button class="bg-green-500 rounded-full shadow py-2 px-6 text-white text-sm">
            {{ auth()->check() && currentUser()->following($user) ? 'Unfollow' : 'Follow' }}
        </button>
    </form>
@endcannot
