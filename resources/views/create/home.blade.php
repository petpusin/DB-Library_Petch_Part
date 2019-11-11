
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Shopping | Categories</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/blog-master.css')}}" rel="stylesheet">
  <link href="{{ asset('css/categories.css')}}" rel="stylesheet">
  <!-- FROM GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  <style>
    .container form {
      display: inline-block;
    }

    .container button {
      display: inline-block;
      vertical-align: middle;
    }

  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <!-- CLICK BUTTON FOR SLIDE OUT -->
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
        <a href="{{route('admin.stock')}}">STOCK IN SYSTEM</a>
        <a href="{{ route('admin.dashboard') }}">EMPLOYEE RESOURCE MANAGEMENT</a>

      </div>
    @endif

    <div class="container navtab">

        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="navbar-brand" href="#"> <img class="cartlg" src="/img/shopping-cart.svg"></a></li>
            @if(Auth::guard('admin')->check())
            <li class="nav-item nav-signin"><a class="nav-link" href="{{ route('admin.logout') }}">SIGN OUT</a></li> <!-- IF ALREADY SIGN IN -->
            @else
            <li class="nav-item nav-signin"><a class="nav-link" href="{{ route('admin.signin') }}">SIGN IN</a></li> <!-- IF NOT SIGN IN YET -->
            @endif
          </ul>
        </div>

    </div>
  </nav>

    <div class="container" id="main">   <!-- START CONTAINER MAIN -->

        <div class="header-text"><h1>CATEGORIES</h1>
          <img class="Mainlogo" src="/img/SHOP-NOW.png" alt="">
        </div>
        <hr class="headhr">                       <!-- LONG LINE -->
        <div class="cate-box">



          <form action="{{url('catalog/t1')}}" method="post">
            {{csrf_field()}}

            <div class="catepreview">  <!-- CATEGORY 1 -->
              <button type="submit" name="">
              <a href="#">
                <img src="/img/CLASSICCAR.jpg" alt="">
                <div class ="namepd">CLASSIC CARS</div>
              </a>
              </button>
            </div>

          </form>

          <form action="{{url('catalog/t2')}}" method="post">
            {{csrf_field()}}

            <div class="catepreview">  <!-- CATEGORY 2 -->
              <button type="submit" name="">
                <a href="#">
                  <img src="/img/MOTOR.jpg" alt="">
                  <div class ="namepd">MOTORCYCLES</div>
                </a>
              </button>
            </div>

          </form>

          <form action="{{url('catalog/t3')}}" method="post">
            {{csrf_field()}}

            <div class="catepreview">  <!-- CATEGORY 3 -->
              <button type="submit" name="">
                <a href="#">
                  <img src="/img/PLANE.jpg" alt="">
                    <div class ="namepd">PLANES</div>
                </a>
              </button>
            </div>

          </form>

          <form action="{{url('catalog/t4')}}" method="post">
            {{csrf_field()}}

            <div class="catepreview">  <!-- CATEGORY 4 -->
              <button type="submit" name="">
                <a href="#">
                  <img src="/img/SHIP.jpg" alt="">
                  <div class ="namepd">SHIPS</div>
                </a>
              </button>
            </div>

          </form>

          <form action="{{url('catalog/t5')}}" method="post">
            {{csrf_field()}}

            <div class="catepreview">  <!-- CATEGORY 5 -->
              <button type="submit" name="">
                <a href="#">
                  <img src="/img/TRAIN.jpg" alt="">
                  <div class ="namepd">TRAINS</div>
                </a>
              </button>
            </div>

          </form>

          <form action="{{url('catalog/t6')}}" method="post">
            {{csrf_field()}}

            <div class="catepreview">  <!-- CATEGORY 6 -->
              <button type="submit" name="">
                <a href="#">
                  <img src="/img/TRUCK.jpg" alt="">
                  <div class ="namepd">TRUCK AND BUSES</div>
                </a>
              </button>
            </div>

          </form>

          <form action="{{url('catalog/t7')}}" method="post">
            {{csrf_field()}}

            <div class="catepreview">  <!-- CATEGORY 7 -->
              <button type="submit" name="">
                <a href="#">
                  <img src="/img/VINTAGEC.jpg" alt="">
                  <div class ="namepd">VINTAGE CARS</div>
                </a>
              </button>
            </div>

          </form>

        </div>
        <hr class="foothr">                       <!-- LONG LINE -->

    </div>   <!-- END CONTAINER MAIN -->

    <footer>      <!-- FOR CONTACT -->
      <img src="/img/phone-book.svg" width="18px"; height="18px"> CONTACT US<br>cpeg2DB@GMAIL.COM | TEL XXX-XXXXXXX
    </footer>

    <script>
    // 01 | SLIDE MENU SCRIPT
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

</body>
</html>
