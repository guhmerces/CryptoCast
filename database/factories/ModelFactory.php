<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use App\Podcast;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Podcast::class, function() {
    return [
        'user_id' => factory(App\User::class)->create()->id             
    ];
});

$factory->define(App\Episode::class, function(){    
    return [
        
    ];
});

$factory->state(Podcast::class, 'published', function(Faker $faker){
    return [
        'published_at' => $faker->dateTimeBetween('-2 years')
    ];
});

$factory->state(App\Episode::class, 'published', function(Faker $faker){
    return [
        'published_at' => $faker->dateTimeBetween('-2 years')
    ];
});