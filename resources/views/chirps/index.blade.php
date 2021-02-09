<x-app>
    <div>
        @include('_publish-chirp-panel')

        @include('_timeline', [
            'chirps' => $chirps
        ])
    </div>
</x-app>
