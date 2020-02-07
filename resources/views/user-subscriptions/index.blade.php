@extends('layouts.index')

@section('content')    
        <div class="container py-6 px-3 px-md-0 px-lg-3">
                @foreach($podcasts as $podcast)
            <div class="row mb-5">
                <div class="col-sm-8 col-md-4 col-lg-2 offset-lg-3">
                    <img class="img-fluid rounded" src="{{ $podcast->imageUrl() }}">
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="mb-2">
                        <h2 class="font-weight-bold">
                            <a href='{{ url("podcasts/$podcast->id") }}' class="text-decoration-none h4 font-weight-semi-bold">{{ $podcast->title }}</a>
                        </h2>
                        <h3 class="fs-0"><a href="{{ $podcast->website }}" class="text-decoration-none text-secondary text-uppercase" target="_blank">{{ $podcast->webHost() }}</a></h3>
                    </div>  
                    @if(Auth::user()->isSubscribedTo($podcast))
                          <form action='{{ url("/subscription/{$podcast->id}") }}' method="POST" class="d-inline-block">
                            @method('DELETE')
                            @csrf
                          <button class="btn-sm btn btn-secondary fs-0 py-1 px-2 text-uppercase">Cancelar Inscrição</button>
                          </form>
                        @else
                          <form action="{{ url('/subscription') }}" method="POST" class="d-inline-block">
                              @csrf
                            <input type="hidden" name="podcast_id" value="{{ $podcast->id }}">
                          <button class="btn-sm btn btn-primary fs-0 py-1 px-2 text-uppercase">Inscrever</button>
                          </form>
                        @endif                   
                </div>
            </div>
                @endforeach
        </div> 
@endsection