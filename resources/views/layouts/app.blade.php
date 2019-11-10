<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('head')
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">     <!-- CSRF Token -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav-app.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>

     
        
        <nav class="navbar navbar-expand-md navbar-light shadow-sm nav-app ">          
                <button class="navbar-toggler" type="button" data-toggle="collapse"data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @if(Auth::guard('admin')->check())
                    <span class="open-slide">
                        <a href="#" onclick="openSlideMenu()">
                        <svg width="30" height="30">
                            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                        </svg>
                        </a>
                    </span>
                    <!-- EACH MENU -->
                    <div id="side-menu" class="side-nav">
                        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>  <!-- CLOSE BUTTON -->
                        <a href="{{ route('admin.orders') }}">ORDER</a>
                        <a href="#">STOCK IN SYSTEM</a>
                        <a href="{{ route('admin.dashboard') }}">EMPLOYEE RESOURCE MANAGEMENT</a>
                    
                    </div> 
                    @endif
                    <!-- Right Side Of Navbar -->
                    <div class="container">
                        <div class="navbar-collapse">
                        <ul class="navbar-nav" style="margin-left:90%;">
                            <!-- Authentication Links -->
                            @guest
                            
                                <!-- <li class="nav-item">
                                    <a class="nav-link " style="color:#CE0037;" href="{{ route('admin.signin') }}">{{ __('SIGN IN') }}</a>
                                </li> -->
                                
                                
                            @else
                            
                                <li class="nav-item dropdown ">
                                    <a id="navbarDropdown" style="color:#BBDDE6;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                        {{ Auth::user()->em_id }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/') }}">
                                        <img src="/img/home.svg" alt="" width="30px"> Home
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            &nbsp;<img src="/img/close.svg" alt="" width="25px"> Sign Out
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
          
                
           
         
            <div class="container" id="main">
        <main class="py-4">
            @yield('content')
        </main>
        </div>
    </div>
</body>

<script>
// SCRIPT 01 | SLIDE MENU
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '300px';
      document.getElementById('main').style.marginLeft = '300px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = 'auto';
    }
// ENDSCRIPT 01   
  </script>
  @yield('script');
</html>
