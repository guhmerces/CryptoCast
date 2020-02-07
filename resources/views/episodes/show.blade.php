@extends('layouts.index')

@section('content')    
<div class="container py-6 px-3 px-md-0 px-lg-3">
    <div class="row">
        <div class="col-md-12">
            <a href='{{ url("podcasts/{$episode->podcast->id}/episodes") }}' class="text-decoration-none text-uppercase fs-0 font-weight-semi-bold"> < Voltar para Podcast</a>
            <div class="my-3">
                <iframe src="{{ $episode->url }}" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="my-6">
                <h2 class="text-center mb-5 font-weight-semi-bold">{{ $episode->title }}</h2>
                {!! $episode->content_text !!}                
            </div>
        </div>
	</div>
</div>    
@endsection