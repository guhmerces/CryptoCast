<?php

namespace App\Http\Controllers;

use App\Podcast;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionsController extends Controller
{
   public function store(Request $request)
    {
        $podcast = Podcast::findOrFail(request('podcast_id'));

        abort_unless($podcast->isPublished() && !$podcast->isOwnedBy(Auth::user()), 404);

        $subscription = Subscription::create([
            'user_id' => Auth::user()->id,
            'podcast_id' => $podcast->id
        ]);

        session()->flash('success', 'Ótimo! Inscrição realizada!!');

        return redirect()->back();
    }

    public function destroy($podcastID)
    {
    	$podcast = Auth::user()->subscriptions()->findOrFail($podcastID);

    	$subscription = Auth::user()->subscriptionTo($podcast);

    	$subscription->delete();

    	session()->flash('info', 'Essa inscrição foi cancelada.');

    	return redirect()->back();
    }
}
