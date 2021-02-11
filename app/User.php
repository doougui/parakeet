<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'bio', 'avatar', 'banner', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        if (Str::length($value) !== 0) {
            $this->attributes['password'] =
                (Hash::needsRehash($value))
                ? Hash::make($value)
                : $value;
        }
    }

    public function getAvatarAttribute($value)
    {
        return asset($value ? "storage/{$value}" : '/images/avatar.jpg');
    }

    public function getBannerAttribute($value)
    {
        return asset($value ? "storage/{$value}" : '/images/banner.jpg');
    }

    public function chirps()
    {
        return $this->hasMany(Chirp::class)
            ->latest();
    }

    public function timeline()
    {
        $following = $this->follows()->pluck('id');

        return Chirp::whereIn('user_id', $following)
            ->orWhere('user_id', $this->id)
            ->withLikes()
            ->latest()
            ->paginate(5);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function liked(Chirp $chirp, $isLike = true)
    {
        return $this->likes
            ->where('chirp_id', $chirp->id)
            ->where('liked', $isLike)
            ->count();
    }

    public function disliked(Chirp $chirp)
    {
        $this->liked($chirp, false);
    }

    public function path()
    {
        return route('profile', $this->username);
    }
}
