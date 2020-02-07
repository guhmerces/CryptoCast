<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PublishedPodcastsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $podcast = Auth::user()->podcasts()->findOrFail(request('podcast_id'));

        $podcast->published_at = Carbon::now();

        $podcast->save();

        session()->flash("success", "Podcast publicado com sucesso!!");

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $podcast = Auth::user()->podcasts()->findOrFail($id);

        $podcast->published_at = null;

        $podcast->save();

        session()->flash("info", "O podcast foi desativado.");

        return redirect()->back();
    }
}
