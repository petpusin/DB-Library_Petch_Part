@extends('layouts.app')

@section('head')

  <link href="{{ asset('css/signin.css')}}" rel="stylesheet">

@endsection

@section('title')

  <title>Shopping | Order</title>
  
@endsection

@section('content')

  <style>
    tr:nth-child(odd) {
    background-color: #f2f2f2;
    }

    footer {
    font-size: 10px;
    font-weight: lighter;
    color: white;
    text-align: center;
    position: relative;
    margin-top: 40px;
    }

    hr{
      background-color:white;
      height:0.5px;
    }
  </style>
  <div class="container">
  
    <h1 class="display-4 text-center mb-4 text-light">ORDER</h1>
    <h3 class="display-9 text-light">Order Results : <a id="total"></a></h3> <!-- SEARCH COUNT ROW MATCH -->
    <div class="row">
      <div class="col-md-12" > <!-- BECAUSE 4*3=12 -->
        
        <div class="card my-4" style="background-color:black;opacity:0.9"> <!-- Search Widget -->
          <h5 class="card-header"><img src="/img/magnifier.svg" width="25px" alt=""> Title : &nbsp;<div class="btn" style="background-color:#00313C;color:white;" id="show_">OrderNumber</div></h5>
          
          <div id="search">
          <div class="select text-center my-2">
            <a onclick="choose('OrderNumber')" class="btn btn-dark btn-sm" id="s0" href="#">OrderNumber</a>&nbsp;
            <a onclick="choose('OrderDate')" class="btn btn-dark btn-sm" id="s1" href="#">OrderDate</a>&nbsp;
            <a onclick="choose('RequiredDate')" class="btn btn-dark btn-sm" id="s2" href="#">RequiredDate</a>&nbsp;
            <a onclick="choose('ShippedDate')" class="btn btn-dark btn-sm" id="s0" href="#">ShippedDate</a>&nbsp;
            <a onclick="choose('Status')" class="btn btn-dark btn-sm" id="s1" href="#">Status</a>&nbsp;
            <a onclick="choose('Comments')" class="btn btn-dark btn-sm" id="s2" href="#">Comments</a>&nbsp;
            <a onclick="choose('FirstName')" class="btn btn-dark btn-sm" id="s0" href="#">FirstName</a>&nbsp;
            <a onclick="choose('LastName')" class="btn btn-dark btn-sm" id="s1" href="#">LastName</a>&nbsp;
          </div>
          
          <div class="card-body">
            <div class="input-group">
              <input type="text" id="input" onkeyup="search()" class="form-control" placeholder="Search value ...">
            </div>
          </div>

        </div>
      </div>
        
      <div class="bg-light">
        <table id="myTR">
          <tr style="background-color:#3b444b;color:white">
            <th height="70px">
                <center>
                  <font size="2px" class="font-weight-normal">Order No.</font>
                </center>
            </th>
            <th width="10%">
                <center>
                  <font size="2px" class="font-weight-normal">Order Date</font>
                </center>
            </th>
            <th>
                <center>
                  <font size="2px" class="font-weight-normal">Required Date</font>
                </center>
            </th>
            <th>
                <center>
                  <font size="2px" class="font-weight-normal">Shipped Date</font>
                </center>
            </th>
            <th width="10%">
                <center>
                  <font size="2px" class="font-weight-normal">Status</font>
                </center>
            </th>
            <th width="35%">
                <center>
                  <font size="2px" class="font-weight-normal">Comments</font>
                </center>
            </th>
            <th width="10%">
              <center>
                <font size="2px" class="font-weight-normal">First Name</font>
              </center>
            </th>
            <th width="10%">
              <center>
                <font size="2px" class="font-weight-normal">Last Name</font>
              </center>
            </th>
            <th width="5%">
              <center>
                <font size="2px" class="font-weight-normal">Edit</font>
              </center>
            </th>
          </tr>

          @foreach($a as $aa)
          <tr style="height:70px">
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
            <td style="font-size:14px; color:red;font-weight:lighter;">
              <center>{{ $aa->status }}</center>
            </td>
            <td style="font-size:12px;font-weight:lighter;">
              {{ $aa->comments }}
              
            </td>

            @foreach($b as $bb)
            @if( $bb->customerNumber == $aa->customerNumber )
            <td style="font-size:12px;font-weight:normal;">
              <center>{{ $bb->contactFirstName }}</center>
            </td>
            <td style="font-size:12px;font-weight:normal;">
              <center>{{ $bb->contactLastName }}</center>
            </td>
            <td>
              <center><a type="" href="/admin/order/edit/{{$aa->orderNumber}}"><img src="/img/pencil.svg" width="30px" height="30px" alt="edit"></a></center>
            </td>
            @endif
            @endforeach
          </tr>
          @endforeach
        </table>
      </div>

    </div>   
    
  </div>

  <footer>      <!-- FOR CONTACT -->
  <hr>
  <br>
      <img src="/img/phone-book.svg" width="18px"; height="18px"> CONTACT US<br>cpeg2DB@GMAIL.COM | TEL XXX-XXXXXXX
    </footer>
    
@endsection

@section('script')
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset ('vendor/bootstrap/js/jquery.min.js')}}"></script>
  <script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/forOrder.js')}}"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
@endsection