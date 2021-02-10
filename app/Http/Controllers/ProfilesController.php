<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'chirps' => $user
                ->chirps()
                ->withLikes()
                ->paginate(5),
        ]);
    }

    public function edit()
    {
        return view('profiles.edit', ['user' => currentUser()]);
    }

    public function update(User $user)
    {
        $validated = request()->validate([
            'name' => ['string', 'required', 'max:255'],
            'bio' => ['nullable', 'string', 'max:160'],
            'avatar' => ['file', 'mimes:jpg,png,jpeg', 'max:1000'],
            'banner' => ['file', 'mimes:jpg,png,jpeg', 'max:3000'],
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['nullable', 'between:8,25', 'confirmed'],
        ]);

        if (request('avatar')) $validated['avatar'] = request('avatar')->store('avatars');
        if (request('banner')) $validated['banner'] = request('banner')->store('banners');

        $user->update($validated);

        return redirect($user->path());
    }
}
