<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        if (currentUser()->id === $user->id) {
            abort(400, "You cam't follow yourself.");
        }

        auth()
            ->user()
            ->toggleFollow($user);

        return back();
    }
}
