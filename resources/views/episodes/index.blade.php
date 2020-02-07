@extends('layouts.index')

@section('content')    
        <div class="container py-6 px-3 px-md-0 px-lg-3">
                @foreach($episodes as $episode)
            <div class="row mb-5">
                <div class="col-sm-8 col-md-4 col-lg-2 offset-lg-3">
                    <img class="img-fluid rounded" src="{{ $episode->podcast->imageUrl() }}">
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="mb-3">
                        <h2 class="font-weight-bold">
                            <a href='{{ url("episodes/$episode->id") }}' class="text-decoration-none h4 font-weight-semi-bold">{{ $episode->title }}</a>
                        </h2>
                        <h3 class="fs-0"><strong>Podcast:</strong> 
                            <a href='{{ url("podcasts/{$episode->podcast->id}") }}' class="text-decoration-none font-weight-semi-bold">{{ $episode->podcast->title }}</a>
                        </h3>
                        <h3 class="fs-0"><a href="{{ $episode->podcast->website }}" class="text-decoration-none text-secondary text-uppercase" target="_blank">{{ $episode->podcast->webHost() }}</a></h3>
                    </div>
                    <div class="">
                    @if($episode->isOwnedBy(Auth::user()))
                          <a href='{{ url("episodes/{$episode->id}/edit") }}' class="btn-sm btn btn-outline-info fs-0 py-1 px-1"> Editar </a>
                    @endif
                    </div>
                </div>
            </div>
                @endforeach
        </div> 
@endsection