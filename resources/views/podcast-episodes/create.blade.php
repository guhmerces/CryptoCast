@extends('layouts.index')
		 
@section('content')    
<div class="col-md-12">
			<div class="col-md-12 px-0 py-4 text-center ">
            <h2 class="font-weight-light text-capitalize mb-0 fs-xl-4 fs-sm-3 heading-underline heading-underline-2"><strong class="text-primary">Criando Episódio</strong>
            </h2>
        </div>
        <div class="container py-6 px-3 px-md-0 px-lg-3">        	
            <div class="row">
                <div class="col-sm-8 col-md-4 col-lg-3 mb-4">
                    <img class="img-fluid rounded" src="{{ $podcast->imageUrl() }}">
                    <div class="my-3">
                        <h3 class="h4 font-weight-bold">{{ $podcast->title }}</h3>
                        <h3 class="fs-0"><a href="{{ $podcast->website }}" class="text-decoration-none text-secondary text-uppercase" target="_blank">{{ $podcast->webHost() }}</a></h3>
                    </div>                                       
                </div>
                <div class="col-md-8 col-lg-9">
                	<form action='{{ url("podcasts/{$podcast->id}/episodes") }}' method="POST">
					@csrf
				  <div class="form-group">
				    <label for="name">Título Personalizado</label>
				    <input class="form-control" type="text" name="title" placeholder="Título do Episódio" 
				    value="{{ old('title') }}"/>
				    @if($errors->has('title'))	
						<div class="alert alert-danger alert-dismissible fade show my-2 p-1" role="alert">
						  <strong>Ooops!! </strong> {{ $errors->first('title') }}
						  <button class="p-1 close" type="button" data-dismiss="alert" aria-label="Close"><span class="font-weight-light" aria-hidden="true">×</span></button>
						</div>
					@endif
				  </div>
				  <div class="form-group">
				    <label for="name">Número do Episódio</label>
				    <input class="form-control" type="text" name="number" placeholder="Número do Episódio" 
				    value="{{ old('number') }}"/>
				    @if($errors->has('number'))	
						<div class="alert alert-danger alert-dismissible fade show my-2 p-1" role="alert">
						  <strong>Ooops!! </strong> {{ $errors->first('number') }}
						  <button class="p-1 close" type="button" data-dismiss="alert" aria-label="Close"><span class="font-weight-light" aria-hidden="true">×</span></button>
						</div>
					@endif
				  </div>
				  <label>Url</label>
				  <div class="input-group mb-3">
					  <div class="input-group-prepend"><span class="input-group-text" id="basic-addon3">https://example.com/</span></div>
					  <input class="form-control" type="text" name="url" aria-describedby="basic-addon3" 
					  value="{{ old('url') }}"/>
					  @if($errors->has('url'))	
						<div class="col-12 alert alert-danger alert-dismissible fade show my-2 p-1" role="alert">
						  <strong>Quase lá ...  </strong> insira a url como no exemplo.
						  <button class="p-1 close" type="button" data-dismiss="alert" aria-label="Close"><span class="font-weight-light" aria-hidden="true">×</span></button>
						</div>
					@endif
				  </div>
				  <div class="form-group">
				    <label for="name">Duração (mins)</label>
				    <input class="form-control" type="text" name="duration" placeholder="Duração em minutos" 
				    value="{{ old('duration') }}"/>
				    @if($errors->has('duration'))	
						<div class="alert alert-danger alert-dismissible fade show my-2 p-1" role="alert">
						  <strong>Ooops!! </strong> {{ $errors->first('duration') }}
						  <button class="p-1 close" type="button" data-dismiss="alert" aria-label="Close"><span class="font-weight-light" aria-hidden="true">×</span></button>
						</div>
					@endif
				  </div>
				  <div class="form-group">
				    <label>Conteúdo</label>
				    <textarea class="form-control" rows="3" name="content_text">{{ old('content_text') }}</textarea>
				    @if($errors->has('content_text'))	
						<div class="col-12 alert alert-danger alert-dismissible fade show my-2 p-1" role="alert">
						  <strong>Verifique a descrição :  </strong> {{ $errors->first('content_text') }}
						  <button class="p-1 close" type="button" data-dismiss="alert" aria-label="Close"><span class="font-weight-light" aria-hidden="true">×</span></button>
						</div>
					@endif
				  </div>			  
				  	<div class="offset-md-4 col-md-4">
				  		<button class="btn btn-primary mb-3 w-100 mt-2" type="submit"><h4 class="text-white font-weight-bold mb-0 fs-1">Criar Episódio</h4></button>	
				  	</div>  
				</form>
                </div>
            </div>
		</div>
@endsection
@section('javascript')
<script>
        $(document).ready(function () {
            tinymce.init({
                selector: 'textarea',
                menubar: true,
                statusbar: true,
                height: 380,
                content_style: "#tinymce p{color:#76838f;}"
            });
        })
    </script>
@endsection
