<?php

namespace App\Policies;

use App\Chirp;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChirpPolicy
{
    use HandlesAuthorization;

    public function delete(User $currentUser, Chirp $chirp)
    {
        return $chirp->user->is($currentUser);
    }
}
