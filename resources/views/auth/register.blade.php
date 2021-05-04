<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border-gray-400 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="username"
                               class="block mb-2 uppercase font-bold text-xs  @error('username') text-red-500 @else text-gray-700 @enderror">
                            {{ __('Username') }}
                        </label>

                        <input type="text"
                               name="username"
                               id="username"
                               autocomplete="username"
                               value="{{ old('username') }}"
                               class="border p-2 m-ful @error('username') border-red-400 @else border-gray-400 @enderror"
                               required
                               autofocus
                        >

                        @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="name"
                               class="block mb-2 uppercase font-bold text-xs  @error('name') text-red-500 @else text-gray-700 @enderror">
                            {{ __('Name') }}
                        </label>

                        <input type="text"
                               name="name"
                               id="name"
                               autocomplete="name"
                               value="{{ old('name') }}"
                               class="border p-2 m-ful @error('name') border-red-400 @else border-gray-400 @enderror"
                               required
                        >

                        @error('name')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email"
                               class="block mb-2 uppercase font-bold text-xs  @error('email') text-red-500 @else text-gray-700 @enderror">
                            {{ __('Email') }}
                        </label>

                        <input type="email"
                               name="email"
                               id="email"
                               autocomplete="email"
                               value="{{ old('email') }}"
                               class="border p-2 m-ful @error('email') border-red-400 @else border-gray-400 @enderror"
                               required
                        >

                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password"
                               class="block mb-2 uppercase font-bold text-xs  @error('password') text-red-500 @else text-gray-700 @enderror">
                            {{ __('Password') }}
                        </label>

                        <input type="password"
                               name="password"
                               id="password"
                               autocomplete="password"
                               class="border p-2 m-ful @error('password') border-red-400 @else border-gray-400 @enderror"
                               required
                        >

                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password"
                               class="block mb-2 uppercase font-bold text-xs  @error('password_confirmation') text-red-500 @else text-gray-700 @enderror">
                            {{ __('Password Confirmation') }}
                        </label>

                        <input type="password"
                               name="password_confirmation"
                               id="password_confirmation"
                               class="border p-2 m-ful @error('password_confirmation') border-red-400 @else border-gray-400 @enderror"
                               required
                        >

                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                                class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500 mr-2"
                        >
                            {{ __('Register') }}
                        </button>

                        <a href="{{ route('login') }}" class="text-xs text-gray-700">{{ __('Login') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
