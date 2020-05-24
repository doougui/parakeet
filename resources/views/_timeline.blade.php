<div class="border border-gray-300 rounded-xl">
    @forelse($chirps as $chirp)
        @include('_chirp')
    @empty
        <p class="p-4 text-center text-gray-500">No chirps yet.</p>
    @endforelse
</div>
