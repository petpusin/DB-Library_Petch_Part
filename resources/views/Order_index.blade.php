@extends('layouts.app')

@section('head')

  <link href="{{ asset('css/signin.css')}}" rel="stylesheet">
  <style>
    table,th,td {
      border: 1px solid black;    
    }
  </style>

@endsection

@section('title')

  <title>Shopping | Order</title>
  
@endsection

@section('content')

  <div class="container">
  
    <h1 class="display-4 text-center mb-4 text-light">ORDER</h1>
    <h3 class="display-9 text-light">Search Results : <a id="total"></a></h3> <!-- SEARCH COUNT ROW MATCH -->
    <div class="row">
      <div class="col-md-12"> <!-- BECAUSE 4*3=12 -->
        
        <div class="card my-4 bg-dark"> <!-- Search Widget -->
          <h5 class="card-header"><img src="/img/magnifier.svg" width="30px" alt=""> : &nbsp;<div class="btn btn-success" id="show_">OrderNumber</div></h5>
          
          <div id="search">
          <div class="select text-center my-2">
            <a onclick="choose('OrderNumber')" class="btn btn-primary btn-sm" id="s0" href="#">OrderNumber</a>&nbsp;
            <a onclick="choose('OrderDate')" class="btn btn-primary btn-sm" id="s1" href="#">OrderDate</a>&nbsp;
            <a onclick="choose('RequiredDate')" class="btn btn-primary btn-sm" id="s2" href="#">RequiredDate</a>&nbsp;
            <a onclick="choose('ShippedDate')" class="btn btn-primary btn-sm" id="s0" href="#">ShippedDate</a>&nbsp;
            <a onclick="choose('Status')" class="btn btn-primary btn-sm" id="s1" href="#">Status</a>&nbsp;
            <a onclick="choose('Comments')" class="btn btn-primary btn-sm" id="s2" href="#">Comments</a>&nbsp;
            <a onclick="choose('FirstName')" class="btn btn-primary btn-sm" id="s0" href="#">FirstName</a>&nbsp;
            <a onclick="choose('LastName')" class="btn btn-primary btn-sm" id="s1" href="#">LastName</a>&nbsp;
          </div>
          
          <div class="card-body">
            <div class="input-group">
              <input type="text" id="input" onkeyup="search()" class="form-control" placeholder="Search for...">
            </div>
          </div>

        </div>
      </div>
        
      <div class="card my-4 bg-light text-dark ">
        <table id="myTR">
          <tr style="background-color:black;color:white">
            <th height="70px">
                <center>
                  <font size="2px">Order No.</font>
                </center>
            </th>
            <th width="10%">
                <center>
                  <font size="2px">Order Date</font>
                </center>
            </th>
            <th>
                <center>
                  <font size="2px">Required Date</font>
                </center>
            </th>
            <th>
                <center>
                  <font size="2px">Shipped Date</font>
                </center>
            </th>
            <th width="10%">
                <center>
                  <font size="2px">Status</font>
                </center>
            </th>
            <th width="35%">
                <center>
                  <font size="2px">Comments</font>
                </center>
            </th>
            <th width="10%">
              <center>
                <font size="2px">First Name</font>
              </center>
            </th>
            <th width="10%">
              <center>
                <font size="2px">Last Name</font>
              </center>
            </th>
            <th width="5%">
              <center>
                <font size="2px">Edit</font>
              </center>
            </th>
          </tr>

          @foreach($a as $aa)
          <tr>
            <td style="font-size:13px;">
              <center>{{ $aa->orderNumber }}</center>
            </td>
            <td style="font-size:13px;">
              <center>{{ $aa->orderDate }}</center>
            </td>
            <td style="font-size:13px;">
              <center>{{ $aa->requiredDate }}</center>
            </td>
            <td style="font-size:13px;" >
              <center>{{ $aa->shippedDate }}</center>
            </td>
            <td style="font-size:14px; color:red">
              <center>{{ $aa->status }}</center>
            </td>
            <td style="font-size:12px;font-weight:lighter;">
              {{ $aa->comments }}
            </td>

            @foreach($b as $bb)
            @if( $bb->customerNumber == $aa->customerNumber )
            <td style="font-size:12px;font-weight:bold;">
              <center>{{ $bb->contactFirstName }}</center>
            </td>
            <td style="font-size:12px;font-weight:bold;">
              <center>{{ $bb->contactLastName }}</center>
            </td>
            <td>
              <center><a type="" href="/admin/order/edit/{{$aa->orderNumber}}"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a></center>
            </td>
            @endif
            @endforeach
          </tr>
          @endforeach
        </table>
      </div>

    </div>   
    
  </div>

@endsection

@section('script')
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset ('vendor/bootstrap/js/jquery.min.js')}}"></script>
  <script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/forOrder.js')}}"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
@endsection