<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserSubscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcasts = Auth::user()->subscriptions;

        return view('user-subscriptions.index', ['podcasts' => $podcasts] );
    }    

    public function __contruct()
    {
        $this->middleware('auth');
    }
}
