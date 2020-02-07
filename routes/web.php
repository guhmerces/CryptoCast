<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::resource('podcasts', 'PodcastsController');

Route::resource('episodes', 'EpisodesController');

Route::resource('podcasts.episodes', 'PodcastEpisodesController')->only(['index', 'create', 'store']);

Route::resource('subscription', 'SubscriptionsController')->only(['store', 'destroy']);

Route::resource('publish', 'PublishedPodcastsController')->only(['store', 'destroy']);

Route::get('user/subscriptions', 'UserSubscriptionsController@index');