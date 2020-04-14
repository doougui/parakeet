<div class="border border-green-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="{{ route('chirps.store') }}">
        @csrf

        <textarea
            name="body"
            class="w-full outline-none"
            placeholder="What are you thinking about?"
            maxlength="255"
            required
        >
        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="This is you"
                class="rounded-full mr-2"
                width="40"
                height="40"
            >

            <button
                type="submit"
                class="bg-green-500 rounded-lg shadow py-2 px-6 text-white"
            >
                Chirp
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
