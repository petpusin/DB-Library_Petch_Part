<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories | Digital Shop</title>
    <link rel="stylesheet" href="/css/indexsty.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/icon/browser-icon.ico" />
</head>

<body>

    <!-- NAV -->

    <nav class>
        <ul class="main-nav">
            <li class="for-emp main-nav-tool" id="list-for-emp" value="">
                <a href="#" id="nav-burger"><img src="https://image.flaticon.com/icons/svg/60/60510.svg" alt=""></a>

                
                <ul id="nav-burger-menu">
                    <li>
                        <div><a href="{{ route('admin.dashboard') }}"><img src="https://image.flaticon.com/icons/svg/1319/1319495.svg"
                                    alt="">Employee
                                Resource
                                Management
                    </li></a></div>

                    <li>
                        <div><a href="{{route('admin.stock')}}"><img src="https://www.flaticon.com/premium-icon/icons/svg/1009/1009874.svg"
                                    alt="">Stock</a></div>
                    </li>
                    <li>
                        <div><a href="{{ route('admin.orders') }}"><img src="https://image.flaticon.com/icons/svg/1252/1252355.svg"
                                    alt="">Order</a></div>
                    </li>
                </ul>

            </li>
            <li class="main-nav-tool"><a href="{{route('admin.cart-index')}}" class="nav-li"><img class="nav-icon"
                        src="https://image.flaticon.com/icons/svg/1374/1374128.svg" alt=""> ({{Cart::count()}})</a>
            </li>
            @if(Auth::guard('admin')->check())
            <li class="push main-nav-tool"><a href="{{ route('admin.logout.home') }}"  class="nav-li"  >Sign Out</a></li>
            @else
            <li class="push main-nav-tool"><a href="{{ route('admin.signin') }}" class="nav-li">Sign In</a></li>
            @endif
        </ul>
    </nav>

    <!-- CONTENT -->

    <div class="container">

        <div class="for-emp-contain">
            <a href="#" id="responClicked"><img src="https://image.flaticon.com/icons/svg/60/60510.svg" alt=""></a>
        </div>

        <div class="for-emp-respon">
            <div class="for-emp-respon-grid" id="respon-menu">
                <a href="#"><img src="https://image.flaticon.com/icons/svg/1319/1319495.svg" alt="">Employee Resource
                    Management</a>
                <a href="#"><img src="https://www.flaticon.com/premium-icon/icons/svg/1009/1009874.svg" alt="">Stock</a>
                <a href="#"><img src="https://image.flaticon.com/icons/svg/1252/1252355.svg" alt="">Order</a>
            </div>

        </div>

        <div class="grid-cover">
            <div class="cover">
                Categories
            </div>

        </div>
        <div class="shop-title">
            <div>Shop now</div>
        </div>
        <div class="grid-items">
            @foreach($productline as $data)
            <div class="item">
                <div><a href="/catalog/{{$data->productLine}}" class="a-tag-pic"><img src="/img/{{$data->productLine}}.svg" alt=""></a></div>
                <div><a href="#">
                        <h1>{{$data->productLine}}</h1>
                    </a></div>
                <div>
                    <p>{{$data->textDescription}}</p>
                </div>

            </div>
            @endforeach
            
        </div>
    </div>

    <!-- FOOTER -->

    <footer>
        <hr>
        <div>
            <p>Database Web Project</p>
            <p class="foot-text">Presented by Computer Engineering Student</p>
        </div>
    </footer>

    <script src="/js/indexscpt.js"></script>
</body>

</html>