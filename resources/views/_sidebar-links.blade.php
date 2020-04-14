<ul>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="{{ route('home') }}"
        >
            Home
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="/explore"
        >
            Explore
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="#"
        >
            Notifications
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="#"
        >
            Messages
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="#"
        >
            Bookmarks
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="#"
        >
            Lists
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="{{ auth()->user()->path() }}"
        >
            Profile
        </a>
    </li>

    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button
                type="submit"
                class="font-bold text-lg mb-4 block"
            >
                Logout
            </button>
        </form>
    </li>

    <li>
        <a
            class="font-bold text-lg block"
            href="#"
        >
            More
        </a>
    </li>
</ul>
