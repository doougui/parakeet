<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

trait Likeable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'SELECT chirp_id, sum(liked) likes, sum(!liked) dislikes FROM likes GROUP BY chirp_id',
            'likes',
            'likes.chirp_id',
            'chirps.id'
        );
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function unlike(User $user)
    {
        return $this->likes()->where('user_id', $user->id)->delete();
    }

    public function like($user = null, $liked = true)
    {
        $user = $user ?? auth()->user();

        if ($user->liked($this, $liked)) {
            return $this->unlike($user);
        }

        return $this->likes()->updateOrCreate([
            'user_id' => $user->id,
        ], [
            'liked' => $liked,
        ]);
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user, $liked = true)
    {
        return (bool) $user->likes
            ->where('chirp_id', $this->id)
            ->where('liked', $liked)
            ->count();
    }

    public function isDislikedBy(User $user)
    {
        return $this->isLikedBy($user, false);
    }
}
