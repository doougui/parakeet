<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'avatar', 'email', 'password',
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

    public function getPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function getAvatarAttribute($value)
    {
        return asset($value);
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
            ->latest()->get();
    }

    public function path()
    {
        return route('profile', $this->username);
    }
}
