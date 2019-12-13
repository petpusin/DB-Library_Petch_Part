@extends('create.master')

@section('css')
<link rel="stylesheet" href="/css/register.css">
@endsection

@section('title')

Shopping | Order

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

  hr {
    background-color: white;
    height: 0.5px;
  }
</style>
<div class="container">

  <h1 class="display-4 text-center mb-4 text-light">HISTORY ADDRESS</h1>
  <h3 class="display-9 text-light">Orders Results : <a id="total"></a></h3> <!-- SEARCH COUNT ROW MATCH -->
  <div class="row">
    <div class="col-md-12">
      <!-- BECAUSE 4*3=12 -->

      <div class="card my-4" style="background-color:black;opacity:0.9">
        <!-- Search Widget -->
        <h5 class="card-header"><img src="/img/magnifier.svg" width="25px" alt=""> Title : &nbsp;<div class="btn" style="background-color:#00313C;color:white;" id="show_">OrderNumber</div>
        </h5>

        <div id="search">
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
            <th height="60px" width="10%">
              <center>
                <font size="2px" class="font-weight-normal">Order Number</font>
              </center>
            </th>
            <th width="25%">
              <center>
                <font size="2px" class="font-weight-normal">AddressLine1</font>
              </center>
            </th>
            <th width="25%">
              <center>
                <font size="2px" class="font-weight-normal">AddressLine2</font>
              </center>
            </th>
            <th width="10%">
              <center>
                <font size="2px" class="font-weight-normal">City</font>
              </center>
            </th>
            <th width="10%">
              <center>
                <font size="2px" class="font-weight-normal">State</font>
              </center>
            </th>
            <th width="10%">
              <center>
                <font size="2px" class="font-weight-normal">Postal Code</font>
              </center>
            </th>
            <th width="10%">
              <center>
                <font size="2px" class="font-weight-normal">Country</font>
              </center>
            </th>
          </tr>
          @foreach($orders as $aa)
          <tr style="height:70px">
            <td style="font-size:13px;">
              <center>{{ $aa->orderNumber }}</center>
            </td>
            <td style="font-size:14px; color:red;font-weight:lighter;">
              <center>{{ $aa->addressLine1 }}</center>
            </td>
            <td style="font-size:14px; color:red;font-weight:lighter;">
              <center>{{ $aa->addressLine2 }}</center>
            </td>
            <td style="font-size:14px; color:red;font-weight:lighter;">
              <center>{{ $aa->city }}</center>
            </td>
            <td style="font-size:14px; color:red;font-weight:lighter;">
              <center>{{ $aa->state }}</center>
            </td>
            <td style="font-size:14px; color:red;font-weight:lighter;">
              <center>{{ $aa->postalCode }}</center>
            </td>
            <td style="font-size:14px; color:red;font-weight:lighter;">
              <center>{{ $aa->country }}</center>
            </td>
          </tr>
          @endforeach
        </table>
      </div>

    </div>
    <div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>
  </div>
  @endsection

  @section('script')
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset ('vendor/bootstrap/js/jquery.min.js')}}"></script>
  <script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script>
    var temp = document.getElementById("myTR").getElementsByTagName("tr").length - 1;
    var count = 0;
    document.getElementById("total").innerHTML = temp;

    function search() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("input");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTR");
      tr = table.getElementsByTagName("tr");
      count = 0;
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
            count++;
          }
        }
      }
      document.getElementById("total").innerHTML = temp - count;
    }
  </script>
  @endsection