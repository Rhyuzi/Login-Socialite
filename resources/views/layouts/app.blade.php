<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style>

@media(max-width : 767px){
    .contentBox{
        width: 100px;
        height: auto;
        flex-direction: column;
    }
    .contentBox .ads{
        height: 100px;
        transform: translateY(-50px);
    }
    .close{
        top: -50px;
        right: -10px;
        background: #f3f3f3 url("../../img/x-lg.svg");
        background-repeat: no-repeat;
        background-size: 30px;
        background-position: center;
    }
}
.popupBack{
    display:flex;
    justify-content: center;
    align-items: center;
    background: rgba(0,0,0, .3) center center fixed;
    background-size: cover;
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100vw;
    min-height: 100hw;
    z-index: -1;
}
.popup{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
visibility: hidden;
background-color: rgba(0,0,0, .3);
}
.contentBox{
position: relative;
width: 650px;
height: 450px;
background: #fff;
border-radius: 20px;
display: flex;
box-shadow: 0 5px 15px rgba(0,0,0.1);
}

.contentBox .ads {
margin-top: 50px;
margin-left: 45px;

}
.close{
position: absolute;
top: 20px;
right: 20px;
width: 40px;
height: 40px;
background: #f3f3f3 url("../../img/x-lg.svg");
background-repeat: no-repeat;
background-size: 30px;
background-position: center;
cursor: pointer;
border-radius: 50%;
z-index: 10;
}
.modal-container{
    position: fixed;
    top: 0;
    left: 0;
    width: 300vm;
    height: 300vh;
    background-color: rgba(0,0,0,0.3);
}

body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
  background-color: #3b5998;
}
.blurpointer{
    filter: blur(20px);
    pointer-events: none;
    user-select: none;
}
.nonblur{
    filter: blur(0);
    pointer-events: inherit;
    user-select: none;
}

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rhyuzi') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="{{ asset('/fonts/nunito') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
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
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('ads') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
   @yield('ads')
  <script>
    const popup = document.querySelector('.popup');
    const close = document.querySelector('.close');

    window.onload = function(){
       setTimeout(() => {
           popup.style.visibility = "visible";
           document.getElementById('blur').classList.toggle("blurpointer");
       }, 1000);
       
    }
    close.addEventListener('click', () => {
       popup.style.display = "none";
       document.getElementById('blur').classList.toggle("nonblur");
   })
   
   function tes(){
    
   }
</script>
</body>
</html>
