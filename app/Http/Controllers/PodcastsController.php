<?php

namespace App\Http\Controllers;

use App\Podcast;
use App\Http\Requests\PodcastFormRequest;
use Illuminate\Support\Facades\Auth;

class PodcastsController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::whereNotNull('published_at')->get();

        return view('podcasts.index', ['podcasts' => $podcasts]);
    }

    public function create()
    {
        return view('podcasts.create');
    }

    public function store(PodcastFormRequest $request)
    {
        $valid = $request->validated();

        $valid['user_id'] = Auth::user()->id;
        
        $podcast = Podcast::create($valid);

        session()->flash('success', 'Podcast criado com sucesso');

        return redirect("podcasts/{$podcast->id}");
    }

    public function show($id)
    {
        $podcast = Podcast::findOrfail($id);

        abort_unless($podcast->isVisibleTo(Auth::user()), 404);

        //Retrieve only recent and published episodes
        $podcast->episodes = $podcast->recentEpisodes()->filter(function ($episode) {
            return $episode->isPublished();
        });

        return view('podcasts.show', [
            'podcast' => $podcast,
            'episodes' => $podcast->episodes
            ]);
    }

    public function edit($id)
    {
        $podcast = Auth::user()->podcasts()->findOrFail($id); 

        return view('podcasts.edit', ['podcast' => $podcast]);
    }

    public function update(PodcastFormRequest $request, $id)
    {        
        $podcast = Auth::user()->podcasts()->findOrFail($id);

        $valid = $request->validated();

        $podcast->update($valid);

        session()->flash('success', 'Dados atualizados com sucesso');

        return redirect()->to("/podcasts/{$podcast->id}");
    }

    public function destroy($id)
    {
        $podcast = Auth::user()->podcasts()->findOrFail($id);

        $podcast->delete();

        return redirect('/podcasts');
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
}
