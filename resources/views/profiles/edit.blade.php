<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <p class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Current banner
            </p>

            <label for="banner" class="cursor-pointer" title="Click to select new banner">
                <img src="{{ $user->banner }}" alt="Your current banner" class="mb-2">
            </label>
        </div>

        <div class="mb-6">
            <label for="banner"
                   class="block mb-2 uppercase font-bold text-xs text-gray-700">
                New banner
            </label>

            <div class="flex">
                <input class="border border-gray-400 p-2 w-full"
                       type="file"
                       name="banner"
                       id="banner"
                >
            </div>

            @error('banner')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="avatar"
                   class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Picture
            </label>

            <div class="flex align-items-start">
                <input class="border border-gray-400 p-2 mr-2 w-full"
                       type="file"
                       name="avatar"
                       id="avatar"
                >

                <img src="{{ $user->avatar }}" alt="Your current avatar" width="40">
            </div>

            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text"
                   name="name"
                   id="name"
                   value="{{ $user->name }}"
                   required
            >

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="bio" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Who am I
            </label>

            <textarea
                name="bio"
                id="bio"
                cols="30"
                rows="3"
                class="border border-gray-400 p-2 w-full"
            >{{ $user->bio }}</textarea>

            @error('bio')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text"
                   name="username"
                   id="username"
                   value="{{ $user->username }}"
                   required
            >

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="email"
                   name="email"
                   id="email"
                   value="{{ $user->email }}"
                   required
            >

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                New Password
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="password"
                   name="password"
                   autocomplete="new-password"
                   id="password"
            >

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password Confirmation
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="password"
                   name="password_confirmation"
                   id="password_confirmation"
            >

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit"
                    class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500 mr-4"
            >
                Edit
            </button>

            <a href="{{ $user->path() }}" class="hover:underline">Cancel</a>
        </div>
    </form>
</x-app>
