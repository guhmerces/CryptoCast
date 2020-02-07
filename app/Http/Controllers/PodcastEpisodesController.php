<?php

namespace App\Http\Controllers;

use App\Podcast;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PodcastEpisodeFormRequest;

class PodcastEpisodesController extends Controller
{
    public function index($id)
    {
        $podcast = Podcast::with('episodes')->findOrFail($id); 

        abort_unless($podcast->isVisibleTo(Auth::user()), 404);             
        
        return view('podcast-episodes.index', ['podcast' => $podcast]);       

    }

    public function create($id)
    {
        $podcast = Podcast::findOrFail($id);

        abort_unless($podcast->isOwnedBy(Auth::user()), 404);

        return view('podcast-episodes.create', ['podcast' => $podcast]);
        
    }

    public function store($id, PodcastEpisodeFormRequest $request)
    {
        $valid = $request->validated();

        $podcast = Podcast::findOrFail($id);

        abort_unless($podcast->isOwnedBy(Auth::user()), 404);

        $valid['podcast_id'] = $podcast->id;

        $valid['published_at'] = Carbon::now();

        $podcast->episodes()->create($valid);

        session()->flash('success', 'Episódio criado com sucesso');

        return redirect()->to("podcasts/{$podcast->id}/episodes");
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
