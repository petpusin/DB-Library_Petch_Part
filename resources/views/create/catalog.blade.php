@extends('layouts.app')


@section('title')

Album example · Bootstrap

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
@endsection
    

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    Bootstrap core CSS -->
    <!-- <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


    <!-- Custom styles for this template -->
    <!-- <link href="album.css" rel="stylesheet"> -->

   

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
          <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
          <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
          <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
        </svg>
      </a>
    </span>
    <!-- EACH MENU -->
    <div id="side-menu" class="side-nav">
      <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a> <!-- CLOSE BUTTON -->
      <a href="{{ route('admin.orders') }}">ORDER</a>
      <a href="{{route('admin.stock')}}">STOCK IN SYSTEM</a>
      <a href="{{ route('admin.dashboard') }}">EMPLOYEE RESOURCE MANAGEMENT</a>

    </div>
    @endif

    <div class="container navtab">

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="navbar-brand" href="{{route('cart.index')}}"> <img class="cartlg" src="/img/shopping-cart.svg"></a></li>
          @if(Auth::guard('admin')->check())
          <li class="nav-item nav-signin"><a class="nav-link" href="{{ route('admin.logout') }}">SIGN OUT</a></li> <!-- IF ALREADY SIGN IN -->
          @else
          <li class="nav-item nav-signin"><a class="nav-link" href="{{ route('admin.signin') }}">SIGN IN</a></li> <!-- IF NOT SIGN IN YET -->
          @endif
        </ul>
      </div>

    </div>
  </nav>

  <div class="container" id="main">
    <!-- START CONTAINER MAIN -->

    <div class="header-text">
      <h1>CATEGORIES</h1>
      <img class="Mainlogo" src="/img/SHOP-NOW.png" alt="">
    </div>
    <hr class="headhr"> <!-- LONG LINE -->
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Catalog</h1>
          <p class="lead text-muted">Buy anything you like.</p>

          <!--
      <form action="{{url('catalog')}}" method="post">
        {{csrf_field()}}
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Vendor and Scale</span>
        </div>
        <input type="text" name="vendor" class="form-control" placeholder="Vendor">
        <input type="text" name="scale" class="form-control" placeholder="Scale">
        <input type="submit" class="btn btn-primary" name="" value="Find">
      </div>
      </form>
      -->

          <!-- <div class="form-group" align="center">
        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
      </div> -->

          <div class="form-group">
            <select name="filter_vendor" id="filter_vendor" class="form-control" required>
              <option value="">Select Vendor</option>
              @foreach($productVendor as $row)
              <option value="{{ $row->productVendor }}">{{ $row->productVendor }}</option>

              @endforeach
            </select>
          </div>

          <div class="form-group">
            <select name="filter_scale" id="filter_scale" class="form-control" required>
              <option value="">Select Scale</option>
              @foreach($productScale as $row)
              <option value="{{ $row->productScale }}">{{ $row->productScale }}</option>

              @endforeach
            </select>
          </div>

          <form action="{{url('catalog')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="filter" id="filter" class="btn btn-info" value="Filter">

              <input type="submit" name="reset" id="reset" class="btn btn-default" value="Reset">
            </div>
          </form>

          <!-- <form action="{{url('catalog')}}" method="post">
        {{csrf_field()}}
      <div class="form-group" align="center">
        <input type="submit" name="filter" id="filter" class="btn btn-info" value="Filter">

        <input type="submit" name="reset" id="reset" class="btn btn-default" value="Reset">
      </div>
      </form> -->

        </div>
      </section>

      <!-- <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Scale</th>
                            <th>Vendor</th>
                        </tr>
                    </thead>
                </table>
   </div> -->

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            @foreach($data as $row)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>
                <div class="card-body">
                  <p class="card-text">{{ $row->productName }}<br>Scale : {{ $row->productScale }}<br>Vendor : {{ $row->productVendor }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>

    </main>

    <footer>
      <!-- FOR CONTACT -->
      <img src="/img/phone-book.svg" width="18px" ; height="18px"> CONTACT US<br>cpeg2DB@GMAIL.COM | TEL XXX-XXXXXXX
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
      window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script>
      // 01 | SLIDE MENU SCRIPT
      function openSlideMenu() {
        document.getElementById('side-menu').style.width = '300px';
        document.getElementById('main').style.marginLeft = '300px';
      }

      function closeSlideMenu() {
        document.getElementById('side-menu').style.width = '0';
        document.getElementById('main').style.marginLeft = 'auto';
      }
      // ENDSCRIPT 01
    </script>

</body>

</html>