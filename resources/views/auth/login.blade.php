<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border-gray-400 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="username"
                               class="block mb-2 uppercase font-bold text-xs text-gray-700  @error('username') invalid-feedback @enderror">
                            {{ __('Username') }}
                        </label>

                        <input type="text"
                               name="username"
                               id="username"
                               autocomplete="username"
                               value="{{ old('username') }}"
                               class="border border-gray-400 p-2 m-ful @error('username') invalid-feedback @enderror"
                               required
                               autofocus
                        >

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password"
                               class="block mb-2 uppercase font-bold text-xs text-gray-700 @error('password') invalid-feedback @enderror"
                        >
                            {{ __('Password') }}
                        </label>

                        <input type="password"
                               name="password"
                               id="password"
                               autocomplete="current-password"
                               class="border border-gray-400 p-2 m-full @error('password') invalid-feedback @enderror"
                               required
                        >

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <input type="checkbox"
                               name="remember"
                               id="remember"
                               class="mr-1" {{ old('remember') ? 'checked' : '' }}
                        >

                        <label for="remember"
                               class="uppercase font-bold text-xs text-gray-700">
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
