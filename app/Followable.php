<?php

namespace App;

trait Followable
{
    public function follow(User $user)
    {
        $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        return $this->follows()->toggle($user);
    }

    public function following(User $user)
    {
        return $this->follows()
            ->where('following_user_id', $user->id)
            ->exists();
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }
}
