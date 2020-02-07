<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $guarded = [''];    
    
    public function podcast()
    {
        return $this->belongsTo(Podcast::class ,'podcast_id');
    }

    public function isVisibleTo($user): bool
    {
        return $this->isOwnedBy($user) || ($this->isPublished() && $this->belongsToPublishedPodcast());
    }

    public function isOwnedBy($user): bool
    {
        return ($user->id == $this->podcast->user_id);
    }

    public function isPublished(): bool
    {
        return (null != $this->published_at);
    }

    public function belongsToPublishedPodcast(): bool
    {
        return $this->podcast->isPublished();
    }
}
