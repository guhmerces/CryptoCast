<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function podcasts()
    {
        return $this->hasMany(Podcast::class);
    }

    public function subscriptions()
    {
        return $this->belongsToMany(Podcast::class, 'user_podcasts');
    }

    public function subscriptionTo($podcast)
    {
        return $this->hasMany(Subscription::class)->where('podcast_id', '=', $podcast->id)->first();
    }

    public function isSubscribedTo($podcast)
    {
        return ($this->subscriptions()->where('podcasts.id' ,'=', $podcast->id)->count() > 0);
    }
}
