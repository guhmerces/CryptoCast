@extends('layouts.index')
@include('partials/slide')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card-deck">            
        @foreach ($podcasts as $podcast)
            <div class="col-12 col-sm-6 col-md-3 px-lg-3 pt-5">
                <div class="card">
                <a href='{{ url("podcasts/{$podcast->id}") }}' class="text-decoration-none">
                    <div class="card-img-top"><img class="img-fluid rounded" src="{{ $podcast->imageUrl() }}" alt="Card image cap" /></div>
                </a>
                <div class="card-body px-1 py-2">
                    <h4 class="card-title font-weight-bold mb-1">
                        <a href='{{ url("podcasts/{$podcast->id}") }}' class="text-decoration-none font-weight-semi-bold  text-800">
                            {{ $podcast->title }}                       
                        </a>
                    </h4> 
                  <p class="card-text"><small class="h6"><a class="text-decoration-none text-600" target="_blank" href="{{ $podcast->website }}">{{ $podcast->webHost() }}</a></small></p>
                </div>
              </div>
            </div>
        @endforeach
        </div>
        </div>

    </div>
@endsection
   
