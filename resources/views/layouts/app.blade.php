<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
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
    <link href="{{ asset('css/nav-app.css') }}" rel="stylesheet">

    @yield('head')

</head>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm nav-app">
            <div class="container">
                
 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <span class="open-slide">
                            <a href="#" onclick="openSlideMenu()">
                                <svg width="30" height="30">
                                    <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                                    <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                                    <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                                </svg>
                            </a>
                            </span>

                        <div id="side-menu" class="side-nav">
                            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
                        
                            <a href="{{route('admin.orders')}}">ORDER</a>
                            <a href="#">STOCK IN SYSTEM</a>
                            <a href="{{ route('admin.home') }}">EMPLOYEE RESOURCE MANAGEMENT</a>
                            <a href="{{ route('admin.dashboard') }}">DashBoard</a>
                        
                        </div> 
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.signin') }}">{{ __('SIGN IN') }}</a>
                            </li>
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->em_id }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/') }}">
                                        Home
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
