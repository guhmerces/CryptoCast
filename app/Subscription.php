<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{

	protected $fillable = ['user_id', 'podcast_id'];

    public $table = "user_podcasts";
}
