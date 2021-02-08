<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit()
    {
        return view('profiles.edit', ['user' => currentUser()]);
    }

    public function update(User $user)
    {
        $validated = request()->validate([
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['required', 'file'],
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed']
        ]);

        $validated['avatar'] = request('avatar')->store('avatars');

        $user->update($validated);

        return redirect($user->path());
    }
}
