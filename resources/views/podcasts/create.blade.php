@extends('layouts.index')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12 px-0 py-4 text-center ">
            <h2 class="font-weight-light text-capitalize mb-0 fs-xl-4 fs-sm-3 heading-underline heading-underline-2"><strong class="text-primary">Cadastre seu Podcast</strong>
            </h2>
        </div> 
			<form action="{{ url('podcasts') }}" method="POST">
				@csrf
			  <div class="form-group">
			    <label for="name">Título do Podcast</label>
			    <input class="form-control" type="text" name="title" placeholder="Título do Podcast" 
			    value="{{ old('title') }}"/>
			    @if($errors->has('title'))	
					<div class="alert alert-danger alert-dismissible fade show my-2 p-1" role="alert">
					  <strong>Ooops!! </strong> {{ $errors->first('title') }}
					  <button class="p-1 close" type="button" data-dismiss="alert" aria-label="Close"><span class="font-weight-light" aria-hidden="true">×</span></button>
					</div>
				@endif
			  </div>
			  <label>Website</label>
			  <div class="input-group mb-3">
				  <div class="input-group-prepend"><span class="input-group-text" id="basic-addon3">https://example.com/</span></div>
				  <input class="form-control" type="text" name="website" aria-describedby="basic-addon3" 
				  value="{{ old('website') }}"/>
				  @if($errors->has('website'))	
					<div class="col-12 alert alert-danger alert-dismissible fade show my-2 p-1" role="alert">
					  <strong>Quase lá ...  </strong> escreva o website como no exemplo.
					  <button class="p-1 close" type="button" data-dismiss="alert" aria-label="Close"><span class="font-weight-light" aria-hidden="true">×</span></button>
					</div>
				@endif
			  </div>
			  <div class="form-group">
			    <label>Descrição</label>
			    <textarea class="form-control" rows="3" name="description">{{ old('description') }}</textarea>
			    @if($errors->has('description'))	
					<div class="col-12 alert alert-danger alert-dismissible fade show my-2 p-1" role="alert">
					  <strong>Verifique a descrição :  </strong> {{ $errors->first('description') }}
					  <button class="p-1 close" type="button" data-dismiss="alert" aria-label="Close"><span class="font-weight-light" aria-hidden="true">×</span></button>
					</div>
				@endif
			  </div>			  
			  	<div class="offset-md-4 col-md-4">
			  		<button class="btn btn-primary mb-3 w-100 mt-2" type="submit"><h4 class="text-white font-weight-bold mb-0 fs-1">Cadastrar meu Podcast</h4></button>	
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
