<?php

namespace App\Http\Controllers;

use App\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PodcastEpisodeFormRequest;

class EpisodesController extends Controller
{
    public function index()
    {
        // Retrieve Published Episodes (published_at != null) of only Published Podcasts
        $episodes = Episode::with('podcast')
            ->whereNotNull('published_at')
            ->whereExists(function ($query) {
                $query->select('id')
                    ->from('podcasts')
                    ->whereNotNull('podcasts.published_at')
                    ->whereRaw('podcasts.id = episodes.podcast_id');
            })            
            ->take(50)
            ->latest()
            ->get();

        return view('episodes.index', ['episodes' => $episodes]);
    }
  
    public function show($id)
    {
        $episode = Episode::with('podcast')->findOrFail($id);

        abort_unless($episode->isVisibleTo(Auth::user()), 404);

        return view('episodes.show', ['episode' => $episode]);
    }
   
    public function edit($id)
    {
        $episode = Episode::with('podcast')->findOrFail($id);

        abort_unless($episode->isOwnedBy(Auth::user()), 404);

        return view('episodes.edit', ['episode' => $episode]);
    }
    
    public function update(PodcastEpisodeFormRequest $request, $id)
    {
        $valid = $request->validated();

        $episode = Episode::findOrFail($id);

        abort_unless($episode->isOwnedBy(Auth::user()), 404);

        $episode->update($valid);

        session()->flash('success', 'Episódio atualizado com sucesso');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $episode = Episode::findOrFail($id);

        abort_unless($episode->isOwnedBy(Auth::user()), 404);

        $episode->delete();

        session()->flash('info', 'Episódio excluído com sucesso.');

        return redirect("/podcasts/{$episode->podcast->id}");
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
}
