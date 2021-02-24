<div class="border border-green-400 rounded-lg px-8 py-6 mb-8" data-textarea="container">
    <form method="POST" action="{{ route('chirps.store') }}">
        @csrf

        <textarea
            name="body"
            class="w-full outline-none"
            placeholder="What are you thinking about?"
            maxlength="255"
            data-textarea="chirp"
            required
            autofocus
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src="{{ currentUser()->avatar }}"
                alt="This is you"
                class="rounded-full mr-2"
                width="40"
                height="40"
            >

            <div class="flex items-center">
                <p class="text-xs mr-3 text-gray-500" data-textarea="length">255</p>
                <button
                    type="submit"
                    class="bg-green-500 hover:bg-green-600 rounded-lg shadow px-10 text-sm py-2 px-6 text-white"
                >
                    Chirp
                </button>
            </div>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
