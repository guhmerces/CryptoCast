@extends('layouts.index')
@section('content')    
        <div class="container py-6 px-3 px-md-0 px-lg-3">
            <div class="row">
                <div class="col-sm-8 col-md-4 col-lg-3 mb-4">
                    <img class="img-fluid rounded" src="{{ $podcast->imageUrl() }}">
                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="mb-4">
                        <h3 class="font-weight-bold">{{ $podcast->title }}</h3>
                        <h3 class="fs-0"><a href="{{ $podcast->website }}" class="text-decoration-none text-secondary text-uppercase" target="_blank">{{ $podcast->webHost() }}</a></h3>
                    </div>
                    <div class="mb-4">
                    @if($podcast->isOwnedBy(Auth::user()))
                          <a href='{{ url("podcasts/{$podcast->id}/edit") }}' class="btn-sm btn btn-outline-secondary fs-0 py-1 px-3"> Editar Podcast </a>                          
                          @if($podcast->isPublished())
                          <form action='{{ url("/publish/{$podcast->id}") }}' method="POST" class="d-inline-block">
                              @method('DELETE')
                              @csrf
                              <button class="btn-sm btn btn-success fs-0 py-1 px-3">Publicado</button>
                          </form>
                          @else
                              <form action="{{ url('/publish') }}" method="POST" class="d-inline-block">
                                  @csrf
                                  <input type="hidden" name="podcast_id" value="{{ $podcast->id }}">
                                  <button class="btn-sm btn btn-outline-success fs-0 py-1 px-3"> Publicar</button>
                              </form>                              
                          @endif                        
                    @else    
                        @if(Auth::user()->isSubscribedTo($podcast))
                          <form action='{{ url("/subscription/{$podcast->id}") }}' method="POST" class="d-inline-block">
                            @method('DELETE')
                            @csrf
                          <button class="btn-sm btn btn-secondary fs-0 py-1 px-3 text-uppercase">Cancelar Inscrição</button>
                          </form>
                        @else
                          <form action="{{ url('/subscription') }}" method="POST" class="d-inline-block">
                              @csrf
                            <input type="hidden" name="podcast_id" value="{{ $podcast->id }}">
                          <button class="btn-sm btn btn-primary fs-0 py-1 px-3 text-uppercase">Inscrever</button>
                          </form>
                        @endif                    
                    @endif
                    </div>
                    <div class="mb-4 col-lg-10 px-0">
                        {!! $podcast->description !!}
                    </div>                    
                </div>
            </div>
            @if($podcast->isOwnedBy(Auth::user())) 
                    <div class="my-4">
                    <h4 class="font-weight-bold mb-3 d-inline-block">Episódios Recentes</h4>
                    <a href='{{ url("podcasts/$podcast->id/episodes") }}' class="btn-outline-info btn btn-sm text-decoration-none rounded p-1 mb-2 ml-md-2">Ver Todos</a>
                          @foreach($podcast->episodes as $episode)
                          <div class="row border-bottom py-3">
                                <div class="col-6 col-md-5">
                                    <a href='{{ url("/episodes/$episode->id") }}' class="text-decoration-none text-secondary font-weight-bold">
                                        {{ $episode->title }}
                                    </a>
                                </div>
                                <div class="col-3 col-md-1 text-center px-0">
                                  <form action='{{ url("episodes/{$episode->id}") }}' method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                  <button type="submit" class="btn btn-outline-secondary mr-1 mb-1 py-1 px-2 text-secondary anchor-outline" data-toggle="modal" data-target="#exampleModal"><svg data-fa-transform="shrink-3" aria-hidden="true" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.5em;" class="svg-inline--fa fa-trash fa-w-14"><g transform="translate(224 256)"><g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M0 84V56c0-13.3 10.7-24 24-24h112l9.4-18.7c4-8.2 12.3-13.3 21.4-13.3h114.3c9.1 0 17.4 5.1 21.5 13.3L312 32h112c13.3 0 24 10.7 24 24v28c0 6.6-5.4 12-12 12H12C5.4 96 0 90.6 0 84zm415.2 56.7L394.8 467c-1.6 25.3-22.6 45-47.9 45H101.1c-25.3 0-46.3-19.7-47.9-45L32.8 140.7c-.4-6.9 5.1-12.7 12-12.7h358.5c6.8 0 12.3 5.8 11.9 12.7z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fas fa-trash ml-1" data-fa-transform="shrink-3"></span> -->
</button>
                                  </form>
                                  <a href='{{ url("/episodes/{$episode->id}/edit") }}' type="button" class="btn btn-outline-secondary mr-1 mb-1 py-1 px-2 text-secondary anchor-outline"><svg data-fa-transform="shrink-3" aria-hidden="true" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;" class="svg-inline--fa fa-pen fa-w-16"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-trash ml-1" data-fa-transform="shrink-3"></span> -->
</a></div>
                                <div class="col-3 col-md-2 text-center">
                                    {{ $episode->duration }} min
                                </div>
                                <div class="col-3 col-md-2 text-center">
                                   "17 Jul 2019"
                                </div>
                                <div class="d-none d-lg-block col-md-2 text-center">
                                     <a href='{{ url("/episodes/$episode->id") }}' class="btn-sm btn btn-outline-secondary mr-1 mb-1 anchor-outline" type="button">
                                        Ouvir Episódio
                                     </a>
                                 </div>
                                 <div class="d-none d-md-block d-lg-none col-md-2 text-center">
                                     <a href='{{ url("/episodes/$episode->id") }}' class="btn-sm btn btn-outline-secondary mr-1 mb-1 anchor-outline" type="button">
                                        Ouvir
                                     </a>
                                 </div>
                          </div>
                          @endforeach                         
                        
                    </div>
                    @else
                      <div class="my-4">
                    <h4 class="font-weight-bold mb-3 d-inline-block">Episódios Recentes</h4>
                    <a href='{{ url("podcasts/$podcast->id/episodes") }}' class="btn-outline-info btn btn-sm text-decoration-none rounded p-1 mb-2 ml-md-2">Ver Todos</a>
                          @foreach($podcast->episodes as $episode)
                          <div class="row border-bottom py-3">
                                <div class="col-6 col-md-6">
                                    <a href='{{ url("/episodes/$episode->id") }}' class="text-decoration-none text-secondary font-weight-bold">
                                        {{ $episode->title }}
                                    </a>
                                </div>
                                <div class="col-3 col-md-2 text-center">
                                    {{ $episode->duration }} min
                                </div>
                                <div class="col-3 col-md-2 text-center">
                                   "17 Jul 2019"
                                </div>
                                <div class="d-none d-lg-block col-md-2 text-center">
                                     <a href='{{ url("/episodes/$episode->id") }}' class="btn-sm btn btn-outline-secondary mr-1 mb-1 anchor-outline" type="button">
                                        Ouvir Episódio
                                     </a>
                                 </div>
                                 <div class="d-none d-md-block d-lg-none col-md-2 text-center">
                                     <a href='{{ url("/episodes/$episode->id") }}' class="btn-sm btn btn-outline-secondary mr-1 mb-1 anchor-outline" type="button">
                                        Ouvir
                                     </a>
                                 </div>
                          </div>
                          @endforeach                         
                        
                    </div>
                    @endif
        </div>        
@endsection

