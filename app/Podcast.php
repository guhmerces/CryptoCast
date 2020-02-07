<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Podcast extends Model
{
    protected $guarded = [''];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function recentEpisodes($count = 3)
    {
        return $this->episodes()->latest()->take($count)->get();
    }   

    public function isVisibleTo($user): bool
    {
        return $this->isPublished() || $this->isOwnedBy($user);
    }

    public function isPublished(): bool
    {
        return null != $this->published_at;
    }

    public function isOwnedBy($user): bool
    {
        return $this->user_id == $user->id;
    }
    
    public function imageUrl()
    {
        return Storage::disk('public')->url($this->cover_path);
    }

    public function webHost()
    {
        return parse_url($this->website, PHP_URL_HOST);
    }    
}
