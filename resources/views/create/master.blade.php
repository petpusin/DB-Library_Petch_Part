<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="/icon/browser-icon.ico" />
    <link rel="stylesheet" href="/css/indexsty.css">
    
    
    
    
    
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/icon/browser-icon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
  <nav class>
    <ul class="main-nav">
    @if(Auth::guard('admin')->check())
      <li class="for-emp main-nav-tool" id="list-for-emp" value="">
        
      
        <a href="#" id="nav-burger"><img src="https://image.flaticon.com/icons/svg/60/60510.svg" alt=""></a>


        <ul id="nav-burger-menu">
          
          <li>
            <div><a href="{{ route('admin.dashboard') }}"><img src="https://image.flaticon.com/icons/svg/1319/1319495.svg" alt="">Employee
                Resource
                Management
          </li></a></div>
          @if(Auth::user()->employee->jobTitle != "VP Marketing" || Auth::user()->employee->jobTitle != "President")
          <li>
            <div><a href="{{route('admin.stock')}}"><img src="https://www.flaticon.com/premium-icon/icons/svg/1009/1009874.svg" alt="">Stock</a></div>
          </li>
          @endif
          <li>
            <div><a href="{{ route('admin.orders') }}"><img src="https://image.flaticon.com/icons/svg/1252/1252355.svg" alt="">Order</a></div>
          </li>
        </ul>
        

      </li>
      <li class="main-nav-tool"><a href="{{route('admin.cart-index')}}" class="nav-li"><img class="nav-icon" src="https://image.flaticon.com/icons/svg/1374/1374128.svg" alt=""> ({{Cart::count()}})</a>
      </li>
       @endif
      <li>@yield('job')</li>
      @if(Auth::guard('admin')->check())
      <li class="push main-nav-tool"><a href="{{ route('admin.logout.home') }}" class="nav-li">Sign Out</a></li>
      @else
      <li class="push main-nav-tool"><a href="{{ route('admin.signin') }}" class="nav-li">Sign In</a></li>
      @endif
    </ul>
  </nav>
  @yield('content')

  <footer>
        <hr>
        <div>
            <p>Database Web Project</p>
            <p class="foot-text">Presented by Computer Engineering Student</p>
        </div>
    </footer>
</body>
<script src="/js/indexscpt.js"></script>
@yield('script');
</html>