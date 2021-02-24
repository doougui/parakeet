<?php

namespace App\Http\Controllers;

use App\User;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        $status = [
            'state' => 'success',
            'message' => 'Toggled follow successfully.'
        ];

        if (currentUser()->id === $user->id) {
            $status = [
                'state' => 'error',
                'message' => "You cam't follow yourself"
            ];
        } else {
            auth()
                ->user()
                ->toggleFollow($user);
        }

        return back()
            ->with($status['state'], true)
            ->with('status', $status['message']);
    }
}
