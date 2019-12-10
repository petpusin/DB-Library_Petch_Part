@extends('layouts.app')

@section('head')

<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

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

@endsection

@section('title')

Shopping | Order/Edit

@endsection

@section('content')
<h1 class="display-4 text-center mb-4 text-light">ORDER</h1>


<div class="container">
  <div class="col-md-12">

    <!-- Search Widget -->
    <div class="my-4 bg-light" style="opacity:0.95">
       
      <div class="card-body">
      <font class="card text-center mb-4"style="color:white;background-color:#3b444b;font-weight:lighter;font-size:20px">EDIT ORDER</font>
              <center>
                <table>
                  @foreach($or as $aaa)
        <tr>
        <td style="background-color:black;color: white ; width:10% ; height:50px">
        <center>Order No.</center>
        </td>
        <td style="width:40% ;height:50px">
          <center class="font-weight-light">{{$aaa->orderNumber}}</center>
        </td>
        </tr>
        <tr>
          <td style="background-color: black ; color: white ; width:10% ; height:50px">
            <center>Order Date</center>
          </td>
          <td height="50">
            <center class="font-weight-light">{{$aaa->orderDate}}</center>
          </td>
        </tr>
        <tr>
          <td style="background-color: black ; color: white ; width:10% ; height:50px">
            <center>Required Date</center>
          </td>
          <td height="50">
            <center class="font-weight-light">{{$aaa->requiredDate}}</center>
          </td>
        </tr>
        @foreach($cus as $bbb)
        @if($aaa->customerNumber == $bbb->customerNumber)
        <tr>
          <td style="background-color: black ; color: white ; width:10% ; height:50px">
            <center>First Name</center>
          </td>
          <td height="50">
            <center class="font-weight-light">{{$bbb->contactFirstName}}</center>
          </td>
        </tr>
        <tr>
          <td style="background-color: black ; color: white ; width:10% ; height:50px">
            <center>Last Name</center>
          </td>
          <td height="50">
            <center class="font-weight-light">{{$bbb->contactLastName}}</center>
          </td>
        </tr>
        @endif
        @endforeach
        <form action="update/{{$aaa->orderNumber}}" method="post">
          {{ method_field('put') }}
          {{ csrf_field() }}
          <tr>
            <td style="background-color: black ; color: white ; width:10% ; height:50px">
              <center>Shipped Date</center>
            </td>
            <td>
              <center><input type="date" name="shippedDate" value={{$aaa->shippedDate}}></center>
            </td>
          </tr>
          <tr>
            <td style="background-color: black ; color: white ; width:10% ; height:50px">
              <center>Status</center>
            </td>
            <td>
              <center>
                @if($aaa->status == "Cancelled")
                <select name="status">
                  <option value="Cancelled" selected>Cancelled</option>
                  <option value="Disputed">Disputed</option>
                  <option value="In Process">In Process</option>
                  <option value="On Hold">On Hold</option>
                  <option value="Resolved">Resolved</option>
                  <option value="Shipped">Shipped</option>
                </select>
                @elseif($aaa->status == "Disputed")
                <select name="status">
                  <option value="Cancelled">Cancelled</option>
                  <option value="Disputed" selected>Disputed</option>
                  <option value="In Process">In Process</option>
                  <option value="On Hold">On Hold</option>
                  <option value="Resolved">Resolved</option>
                  <option value="Shipped">Shipped</option>
                </select>
                @elseif($aaa->status == "In Process")
                <select name="status">
                  <option value="Cancelled">Cancelled</option>
                  <option value="Disputed">Disputed</option>
                  <option value="In Process" selected>In Process</option>
                  <option value="On Hold">On Hold</option>
                  <option value="Resolved">Resolved</option>
                  <option value="Shipped">Shipped</option>
                </select>
                @elseif($aaa->status == "On Hold")
                <select name="status">
                  <option value="Cancelled">Cancelled</option>
                  <option value="Disputed">Disputed</option>
                  <option value="In Process">In Process</option>
                  <option value="On Hold" selected>On Hold</option>
                  <option value="Resolved">Resolved</option>
                  <option value="Shipped">Shipped</option>
                </select>
                @elseif($aaa->status == "Resolved")
                <select name="status">
                  <option value="Cancelled">Cancelled</option>
                  <option value="Disputed">Disputed</option>
                  <option value="In Process">In Process</option>
                  <option value="On Hold">On Hold</option>
                  <option value="Resolved" selected>Resolved</option>
                  <option value="Shipped">Shipped</option>
                </select>
                @else
                <select name="status">
                  <option value="Cancelled">Cancelled</option>
                  <option value="Disputed">Disputed</option>
                  <option value="In Process">In Process</option>
                  <option value="On Hold">On Hold</option>
                  <option value="Resolved">Resolved</option>
                  <option value="Shipped" selected>Shipped</option>
                </select>
                @endif
              </center>
            </td>
          </tr>
          <tr>
            <td style="background-color: black ; color: white ; width:10% ; height:50px">
              <center>Comment</center>
            </td>
            <td>
              <center><textarea rows="3" cols="60" name="comments">{{$aaa->comments}}</textarea></center>
            </td>

          </tr>
          <table>
            <div style="margin-top:30px">
              <center><input type="submit" class="btn" onclick="success()" value="Save" style="background-color:black;color:chartreuse;margin:10px"></center>
            </div>

          </table>
        </form>
        @endforeach
        </table>

        </center>
        <a href="/admin/orders"><img src="/img/left-arrow.svg" width="18px" class="my-3">
          <font color="black" class="font-weight-light">Back<font>
        </a>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
      function success() {
        alert("Saved Success !!!");
      }
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @endsection

    </html>