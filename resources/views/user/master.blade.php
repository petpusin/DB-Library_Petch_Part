<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/indexsty.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/icon/browser-icon.ico" />
    @yield('header')
</head>

<body>
  <nav class>
    <ul class="main-nav">
      <li class="for-emp main-nav-tool" id="list-for-emp" value="">
        @if(Auth::guard('admin')->check())
        <a href="#" id="nav-burger"><img src="https://image.flaticon.com/icons/svg/60/60510.svg" alt=""></a>


        <ul id="nav-burger-menu">
          <li>
            <div><a href="{{ route('admin.dashboard') }}"><img src="https://image.flaticon.com/icons/svg/1319/1319495.svg" alt="">Employee
                Resource
                Management
          </li></a></div>

          <li>
            <div><a href="{{route('admin.stock')}}"><img src="https://www.flaticon.com/premium-icon/icons/svg/1009/1009874.svg" alt="">Stock</a></div>
          </li>
          <li>
            <div><a href="{{ route('admin.orders') }}"><img src="https://image.flaticon.com/icons/svg/1252/1252355.svg" alt="">Order</a></div>
          </li>
        </ul>
        @endif

      </li>
      <li class="main-nav-tool"><a href="{{route('admin.cart-index')}}" class="nav-li"><img class="nav-icon" src="https://image.flaticon.com/icons/svg/1374/1374128.svg" alt=""> ({{Cart::count()}})</a>
      </li>
      @if(Auth::guard('admin')->check())
      <li class="push main-nav-tool"><a href="{{ route('admin.logout.home') }}" class="nav-li">Sign Out</a></li>
      @else
      <li class="push main-nav-tool"><a href="{{ route('admin.signin') }}" class="nav-li">Sign In</a></li>
      @endif
    </ul>
  </nav>

  <div class="container">

        <div class="for-emp-contain">
            <a href="#" id="responClicked"><img src="https://image.flaticon.com/icons/svg/60/60510.svg" alt=""></a>
        </div>

        <div class="for-emp-respon">
            <div class="for-emp-respon-grid" id="respon-menu">
                <a href="{{ route('admin.dashboard') }}"><img src="https://image.flaticon.com/icons/svg/1319/1319495.svg" alt="">Employee Resource
                    Management</a>
                <a href="{{route('admin.stock')}}"><img src="https://www.flaticon.com/premium-icon/icons/svg/1009/1009874.svg" alt="">Stock</a>
                <a href="{{ route('admin.orders') }}"><img src="https://image.flaticon.com/icons/svg/1252/1252355.svg" alt="">Order</a>
            </div>

        </div>
  @yield('content')

  <footer>
        <hr>
        <div>
            <p>Database Web Project</p>
            <p class="foot-text">Presented by Computer Engineering Student</p>
        </div>
    </footer>
</body>

@yield('script');
</html>