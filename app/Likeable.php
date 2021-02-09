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

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
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
