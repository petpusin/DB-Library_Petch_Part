<!--@extends('user.master')
@section('title','Catalog')
@section('content')
@stop-->


<!doctype html>
<html lang="en">

<head>
<title>Album example · Bootstrap</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
          <li class="nav-item active"><a class="navbar-brand" href="{{route('admin.cart-index')}}"> <img class="cartlg" src="/img/shopping-cart.svg">cart({{Cart::count()}})</a></li>
          @if(Auth::guard('admin')->check())
          <li class="nav-item nav-signin"><a class="nav-link" href="{{ route('admin.logout') }}">SIGN OUT</a></li> <!-- IF ALREADY SIGN IN -->
          @else
          <li class="nav-item nav-signin"><a class="nav-link" href="{{ route('admin.signin') }}">SIGN IN</a></li> <!-- IF NOT SIGN IN YET -->
          @endif
        </ul>
      </div>

    </div>
  </nav>
 


  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        
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


        <!-- This is filter -->
        <!-- <div class="form-group">
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
      </div> -->
        <!-- End filter -->

        <div class="button-container">

          <form action="{{url('catalog/cat10')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="1:10" id="1:10" class="btn btn-info" value="1:10">
            </div>
          </form>

          <form action="{{url('catalog/cat12')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="1:12" id="1:12" class="btn btn-info" value="1:12">
            </div>
          </form>

          <form action="{{url('catalog/cat18')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="1:18" id="1:18" class="btn btn-info" value="1:18">
            </div>
          </form>

          <form action="{{url('catalog/cat24')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="1:24" id="1:24" class="btn btn-info" value="1:24">
            </div>
          </form>

          <form action="{{url('catalog/cat32')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="1:32" id="1:32" class="btn btn-info" value="1:32">
            </div>
          </form>

          <form action="{{url('catalog/cat50')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="1:50" id="1:50" class="btn btn-info" value="1:50">
            </div>
          </form>

          <form action="{{url('catalog/cat72')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="1:72" id="1:72" class="btn btn-info" value="1:72">
            </div>
          </form>

          <form action="{{url('catalog/cat700')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="1:700" id="1:700" class="btn btn-info" value="1:700">
            </div>
          </form>

        </div>


        <div class="button-container">

          <form action="{{url('catalog/v1')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v1" id="v1" class="btn btn-info" value="Autoart Studio Design">
            </div>
          </form>

          <form action="{{url('catalog/v2')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v2" id="v2" class="btn btn-info" value="Carousel DieCast Legends">
            </div>
          </form>

          <form action="{{url('catalog/v3')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v3" id="v3" class="btn btn-info" value="Classic Metal Creations">
            </div>
          </form>

          <form action="{{url('catalog/v4')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v4" id="v4" class="btn btn-info" value="Exoto Designs">
            </div>
          </form>

          <form action="{{url('catalog/v5')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v5" id="v5" class="btn btn-info" value="Gearbox Collectibles">
            </div>
          </form>

          <form action="{{url('catalog/v6')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v6" id="v6" class="btn btn-info" value="Highway 66 Mini Classics">
            </div>
          </form>

          <form action="{{url('catalog/v7')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v7" id="v7" class="btn btn-info" value="Min Lin Diecast">
            </div>
          </form>

          <form action="{{url('catalog/v8')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v8" id="v8" class="btn btn-info" value="Motor City Art Classics">
            </div>
          </form>

          <form action="{{url('catalog/v9')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v9" id="v9" class="btn btn-info" value="Red Start Diecast">
            </div>
          </form>

          <form action="{{url('catalog/v10')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v10" id="v10" class="btn btn-info" value="Second Gear Diecast">
            </div>
          </form>

          <form action="{{url('catalog/v11')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v11" id="v11" class="btn btn-info" value="Studio M Art Models">
            </div>
          </form>

          <form action="{{url('catalog/v12')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v12" id="v12" class="btn btn-info" value="Unimax Art Galleries">
            </div>
          </form>

          <form action="{{url('catalog/v13')}}" method="post">
            {{csrf_field()}}
            <div class="form-group" align="center">
              <input type="submit" name="v13" id="v13" class="btn btn-info" value="Welly Diecast Productions">
            </div>
          </form>

        </div>



      <div class="button-container">


      
      <div class="form-group" align="center">
        <input type="submit" name="reset" id="reset" class="btn btn-default" value="back">
      </div>


      
      <div class="form-group" align="center">
        <a href="/">back</a>
      </div>
      


        </div>



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
    <div class="col-xs-6 clo-sm-3 ">
        <select name="" id="scale">
          <option value="">Select a Scales</option>
          @foreach($productScale as $data)
          <option value="{{$data->productScale}}" class="option">{{$data->productScale}}</option>
          @endforeach
        </select>
        <select name="" id="vender">
        <option value="">Select a Vender</option>
          @foreach($productVendor as $data)
          <option value="{{$data->productVendor}}" class="option">{{$data->productVendor}}</option>
          @endforeach
        </select>
        <button id="findBtn">Find</button>
      </div>
      
      <div class="container">

        <div class="row" id="productData">
          @foreach($products as $row)
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg>
              <div class="card-body">
                <p class="card-text">{{ $row['productName'] }}<br>Scale : {{ $row['productScale'] }}<br>Vendor : {{ $row['productVendor'] }}<br>ProductLine : {{ $row['productLine'] }}<br>Price : ${{$row['buyPrice'
                ]}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button  type="button" class="btn btn-sm btn-outline-secondary"><a href="/catalog/{{$row['productLine']}}/{{$row['productCode']}}">View</a></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>

   
                </div>
              </div>
            </div>
          </div>
          @endforeach
          {{ $products->appends(request()->input())->links() }}
                    
          
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
</body>

</html>

<script>
  ajax: {
    url: "{{url('catalog/cat')}}",
    data: {
      filter_scale: filter_scale,
      filter_vendor: filter_vendor
    }
  }
</script>
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
    <script>
    $(document).ready(function(){
        
        
        $("#findBtn").click(function(){
            var scale = $("#scale").val();
            var vender = $("#vender").val();
           
            $.ajax({
                url: "{}",
                data:'scale=' + scale + '&vender' + vender,
                type:'get',
                success:function(response){
                    
                    console.log(response);
                    $("#productData").html(response);
                }
            })
        });
        
    });

    
</script>
<script>
  jQuery(function($){
  $('.btn btn-default').click(function(e){
    history.back();
  });
});
</script>


<!-- <script>
$(document).ready(function(){
    fill_datatable();

    function fill_datatable(filter_scale = '', filter_vendor = '')
    {
        var dataTable = $('#customer_data').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                      url: "{{ route('catalog.index') }}",
                      data:{filter_scale:filter_scale, filter_vendor:filter_vendor}
            },
            columns: [
                {
                    data:'productName',
                    name:'productName'
                },
                {
                    data:'productScale',
                    name:'productScale'
                },
                {
                    data:'productVendor',
                    name:'productVendor'
                }
            ]

            });
    }

    $('#filter').click(function(){
        var filter_scale = $('#filter_scale').val();
        var filter_vendor = $('#filter_vendor').val();

        if(filter_scale != '' &&  filter_vendor != '')
        {
            $('#customer_data').DataTable().destroy();
            fill_datatable(filter_scale, filter_vendor);
        }
        else
        {
            alert('Select Both filter option');
        }
    });

    $('#reset').click(function(){
        $('#filter_scale').val('');
        $('#filter_vendor').val('');
        $('#customer_data').DataTable().destroy();
        fill_datatable();
    });

});
</script> -->


