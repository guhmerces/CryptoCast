<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ config('app.name') }}</title>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7CNunito+Sans:300,400,700,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{asset('/lib/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/semantic-ui-accordion/accordion.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/semantic-ui-transition/transition.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('/css/toastr.min.css')}}" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  @if(request()->is('podcasts'))
  <nav class="navbar navbar-expand-lg bg-light fixed-top">
  @else
  <nav class="navbar navbar-expand-lg bg-light fixed">
  @endif
    <div class="container">
      <a class="navbar-brand text-decoration-none font-weight-bold" href="{{ route('home') }}">CryptoCast</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      	<!-- Authentication -->      	
        <ul class="navbar-nav ml-auto">
        @guest        	
          <li class="nav-item">
            <a class="mx-1 btn btn-primary nav-link nav-link" href="{{ route('login') }}">Log in</a>
          </li>
          @if(Route::has('register'))
	          <li class="nav-item">
	            <a class="mx-1 btn btn-outline-secondary nav-link" href="{{ route('register') }}">Cadastrar             
	            </a>
	          </li>
          	@endif
        @else
        <li class="nav-item">
            <a class="text-decoration-none font-weight-bold mx-md-3 mb-1" href="{{ url('/user/subscriptions') }}">Meus Favoritos</a>
          </li>
          <li class="nav-item">
            <a class="text-decoration-none font-weight-bold mx-md-3 mb-1" href="{{ url('/episodes') }}">Episódios Recentes</a>
          </li>
          <li class="nav-item">
            <a class="text-decoration-none font-weight-bold mx-md-3 mb-1" href="{{ url('podcasts/create') }}">Cadastrar Podcast</a>
          </li>
          <li class="nav-item">
            <a class="text-decoration-none font-weight-bold mx-md-3 mb-1" href="{{ route('logout') }}" 
             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
          </form>
         @endguest
        </ul>
      </div>
    </div>
  </nav>
  
   

 @yield('content');


<footer>
<script src="{{asset('/js/jquery.min.js')}}"></script>
        <script src="{{asset('/js/popper.min.js')}}"></script>
        <script src="{{asset('/js/bootstrap.js')}}"></script>
        <script src="{{asset('/js/plugins.js')}}"></script>
        <script src="{{asset('/lib/is/is.min.js')}}"></script>
        <script src="{{asset('/lib/stickyfilljs/stickyfill.min.js')}}"></script>
        <script src="{{asset('/lib/sticky-kit/sticky-kit.min.js')}}"></script>
        <script src="{{asset('/carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/lib/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('/lib/isotope-packery/packery-mode.pkgd.min.js')}}"></script>
        <script src="{{asset('/lib/semantic-ui-accordion/accordion.min.js')}}"></script>
        <script src="{{asset('/lib/semantic-ui-transition/transition.min.js')}}"></script>
        <script src="{{asset('/lib/fancybox/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('/js/theme.js')}}"></script>
        <script src="{{ asset('/js/tinymce.min.js') }}"></script>
        <script src="{{ asset('/js/toastr.min.js') }}"></script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&amp;callback=initMap"
            async></script>
        <script>

   $(document).ready(function() {
     toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    @if(session()->has('success'))
        toastr["success"]("{{ session('success') }}", "Yay!! 🎉");        
    @elseif(session()->has('info'))
        toastr["info"]("{{ session('info') }}", "🤔");
    @elseif(session()->has('warning'))
        toastr["warning"]("{{ session('warning') }}", "🤔");
    @elseif(session()->has('error'))
        toastr["error"]("{{ session('error') }}", "😱");
    @endif
   })


</script>
        @yield('javascript')
    </footer>
</body>
</html>
