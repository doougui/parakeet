<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border-gray-400 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                <form method="POST" action="{{ route('login') }}">
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
                        <label for="password"
                               class="block mb-2 uppercase font-bold text-xs @error('username') text-red-500 @else text-gray-700 @enderror"
                        >
                            {{ __('Password') }}
                        </label>

                        <input type="password"
                               name="password"
                               id="password"
                               autocomplete="current-password"
                               class="border p-2 m-full @error('password') border-red-400 @else border-gray-400 @enderror"
                               required
                        >

                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <input type="checkbox"
                               name="remember"
                               id="remember"
                               class="mr-1" {{ old('remember') ? 'checked' : '' }}
                        >

                        <label for="remember"
                               class="uppercase font-bold text-xs @error('password') text-red-700 @else text-gray-700 @enderror">
                            {{ __('Remember me') }}
                        </label>
                    </div>

                    <div>
                        <button type="submit"
                                class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500 mr-2"
                        >
                            {{ __('Submit') }}
                        </button>

                        <a href="{{ route('password.request') }}" class="text-xs text-gray-700">{{ __('Forgot your password?') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
