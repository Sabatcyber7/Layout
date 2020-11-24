<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                    <img title="Home" src="/Imagem/logo.jpg" height="75px" width="150px"> 
                
                </a>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('quem') }}">Quem somos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Escritório
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('cad_empresa') }}">Cadastrar Empresa</a>
          <a class="dropdown-item" href="#">Cadastrar Contratante</a>
          <a class="dropdown-item" href="#">Emitir Nota Fiscal</a>
          <a class="dropdown-item" href="{{ route('cad_numero') }}">Numero</a>
          <a class="dropdown-item" href="{{ route('Excel') }}">Excel</a>
          
          <a class="dropdown-item" href="{{ route('react') }}">React</a>
          
        </div>
      </li>

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mais
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Contato</a>
          <a class="dropdown-item" href="#">Preços</a>
          <a class="dropdown-item" href="#">Trabalhe conosco</a>
        </div>
      </li>


    </ul>
  </div>
</nav>



                 
    <a style="margin-left: 7%;" href="https://twitter.com/login?lang=pt"><img title="twitter" style="width: 30px; height:30px; " src = "/Imagem/icones/twitter.jpg"></a>
    <a style="margin-left: 5px;" href="https://pt-br.facebook.com/"><img title="facebook" style="width: 30px; height:30px;" src = "/Imagem/icones/facebook.jpg"></a>
    <a style="margin-left: 5px;" href="https://youtube.com/"><img title="youtube" style="width: 30px; height:30px; " src = "/Imagem/icones/youtube.jpg"></a>
                    


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                 <b> <a class="btn btn-primary" style="background:#0B3861;color: white;" href="{{ route('login') }}">{{ __('LOGAR') }}</a> </b>
                                 &nbsp &nbsp
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                            <b><a class="btn btn-primary" style="background:#0B3861; color: white;" href="{{ route('register') }}">{{ __('REGISTRAR') }}</a></b>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <b style="color:#DF7401; font-size: 17px;"> {{ Auth::user()->name }} </b> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <b style="color:red; font-size: 20px;">    {{ __('Sair') }} </b>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>


<script>
 $(function(){
   $(".button-collapse").sideNav();
 });
 </script>
</html>
