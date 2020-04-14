<form method="POST" action="{{ route('follow', ['user' => $user]) }}">
    @csrf

    <button class="bg-green-500 rounded-full shadow py-2 px-6 text-white text-sm
        {{ auth()->guest() ? 'opacity-50 cursor-default' : '' }}"
        {{ auth()->guest() ? 'disabled' : '' }}
    >
        {{ auth()->check() && auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}
    </button>
</form>
