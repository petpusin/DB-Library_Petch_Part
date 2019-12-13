<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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


        <a href="#" id="nav-burger"><img src="/img/list-menu.svg" alt=""></a>


        <ul id="nav-burger-menu">

          <li>
          @if(Auth::user()->employee->jobTitle == "VP Sales" || Auth::user()->employee->jobTitle == "President"||Auth::user()->employee->jobTitle == "Sales Manager (NA)"|| Auth::user()->employee->jobTitle == "Sales Manager (APAC)" ||Auth::user()->employee->jobTitle == "Sale Manager (EMEA)" || Auth::user()->employee->jobTitle == "Sales Rep")
            <div><a href="{{ route('admin.dashboard') }}"><img src="/img/employee.svg" alt="">Employee
                Resource
                Management
          </li></a></div>@endif
          @if(Auth::user()->employee->jobTitle == "VP Sales" || Auth::user()->employee->jobTitle == "President"||Auth::user()->employee->jobTitle == "Sales Manager (NA)"|| Auth::user()->employee->jobTitle == "Sales Manager (APAC)" ||Auth::user()->employee->jobTitle == "Sale Manager (EMEA)" || Auth::user()->employee->jobTitle == "Sales Rep")
          <li>
            <div><a href="{{route('admin.stock')}}"><img src="/img/factory-stock-house.svg" alt="">Stock</a></div>
          </li>
          @endif
          <li>
          @if(Auth::user()->employee->jobTitle != "VP Marketing" )
            <div><a href="{{ route('admin.orders') }}"><img src="/img/order.svg" alt="">Order</a></div>
          </li>
          @endif
          <li>
            <div><a href="{{route('admin.customer.create')}}"><img src="/img/customers.svg" alt="">Register</a></div>
          </li>
          <li>
            <div><a href="{{route('customer.multeple')}}"><img src="/img/customers.svg" alt="">Customer</a></div>
          </li>
          <li>
          @if(Auth::user()->employee->jobTitle == "VP Sales" || Auth::user()->employee->jobTitle == "President"||Auth::user()->employee->jobTitle == "Sales Manager (NA)"|| Auth::user()->employee->jobTitle == "Sales Manager (APAC)" ||Auth::user()->employee->jobTitle == "Sale Manager (EMEA)" || Auth::user()->employee->jobTitle == "Sales Rep")
            <div><a href="{{route('payment')}}"><img src="/img/credit-cards-payment.svg" alt="">Payment</a></div>
          </li>
          @endif
          <li>
            <div><a href="{{route('order_addr')}}"><img src="/img/time.svg" alt="">History</a></div>
          </li>
          <li>
          @if(Auth::user()->employee->jobTitle == "VP Sales"||Auth::user()->employee->jobTitle == "President")
            <div><a href="{{url('/admin/coupon')}}"><img src="/img/coupon.svg" alt="">Coupon</a></div>
          </li>
          @endif
        </ul>


      </li>
      <li class="main-nav-tool"><a href="{{route('admin.cart-index')}}" class="nav-li"><img class="nav-icon" src="https://image.flaticon.com/icons/svg/1374/1374128.svg" alt=""> ({{Cart::count()}})</a>
      </li>
      @endif
      <li class=" main-nav-tool job">@yield('job')</li>
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
  <script src="/js/indexscpt.js"></script>
</body>

@yield('script');

</html>