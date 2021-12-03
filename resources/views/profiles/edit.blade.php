<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <p class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Current banner
            </p>

            <label for="banner" class="cursor-pointer" title="Click to select new banner">
                <img src="{{ $user->banner }}" alt="Your current banner" class="mb-2" id="bimg">
            </label>
        </div>
        <div class="mb-6 hidden" id="preview-container">
            <p class="block mb-2 uppercase font-bold text-xs text-gray-700">
                New Picture Preview
            </p>
                <img 
                src= "#"
                alt="Banner preview" class="mb-2 cursor-pointer" id="preview"
                onclick="showModal()"
                title="Click to crop again"
                >
        </div>
        <div class="mb-6">
            <label for="banner"
                   class="block mb-2 uppercase font-bold text-xs text-gray-700">
                New banner
            </label>

            <div class="flex">
                <input class="border border-gray-400 p-2 w-full profilefiles"
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
                <input class="border border-gray-400 p-2 mr-2 w-full profilefiles"
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
<!-- Modal -->
<div class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 bg-black bg-opacity-10 transition-opacity" aria-hidden="true"></div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4" id="cropper">
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button
            class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500 mr-4"
            id="show-result" type="button">Set Banner</button>
          <button type="button" class="bg-gray-200 text-black rounded py-2 px-4 hover:bg-gray-500 mr-4"
          id="show-result"  onclick="showModal()">
            Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- cropper script -->
<script src="{{ asset('js/profilecropper/profile.js') }}" defer></script>