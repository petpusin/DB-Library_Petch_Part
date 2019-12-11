@extends('create.master')



@section('title')

Shopping | Order

@endsection
@section('css')
<link rel="stylesheet" href="/css/order.css">
@endsection

@section('content')


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

  <!-- ORDER HEADER -->

  <div class="search-field">
    <div class="filter-grid-container">
      <div class="filter-item1">
        <img id="filter-mag" src="/img/magnifying-glass.svg" alt="">
        <select name="" id="">
          <option value="" disabled selected>Title</option>
          <option onclick="choose('OrderNumber')" value="">Order Number</option>
          <option onclick="choose('OrderDate')" value="">Order Date</option>
          <option onclick="choose('RequiredDate')" value="">Require Date</option>
          <option onclick="choose('ShippedDate')" value="">Shipped Date</option>
          <option onclick="choose('Status')" value="">Status</option>
          <option onclick="choose('Comments')" value="">Comments</option>
          <option onclick="choose('FirstName')" value="">First name</option>
          <option onclick="choose('LastName')" value="">Last name</option>
        </select></div>

      <div class="filter-item2">
        <input type="text" id="input" onkeyup="search()" placeholder="search key">
      </div>

    </div>
  </div>
  <h3 class="display-9 text-light">Order Results : <a id="total"></a></h3>
  <h5 class="card-header"><img src="/img/magnifier.svg" width="25px" alt=""> Title : &nbsp;<div class="btn" style="background-color:#00313C;color:white;" id="show_">OrderNumber</div></h5>
  <div class="grid-for-stockheader">Order</div>
  <div id="myTR">
    <div class="grid-contain-head-order">
      <div>Order No.</div>
      <div>Order Date</div>
      <div>Require Date</div>
      <div>Shipped Date</div>
      <div>Status</div>
      <div>Comments</div>
      <div>First Name</div>
      <div>Last Name</div>
      <div>Tools</div>
    </div>

    <!-- FROM DATABASE -->
    @foreach($a as $aa)
    <div class="grid-contain-dbs-order" id="tr">
      <div id="td">{{ $aa->orderNumber }}</div>
      <div id="td">{{ $aa->orderDate }}</div>
        <div id="td">{{ $aa->requiredDate }}</div>
        <div id="td">{{ $aa->shippedDate }}</div>
        <div id="td">{{ $aa->status }}</div>
        <div id="td">{{ $aa->comments }}</div>
        
        @foreach($b as $bb)
        @if( $bb->customerNumber == $aa->customerNumber )
        <div id="td">{{ $bb->contactFirstName }}</div>
        <div id="td">{{ $bb->contactLastName }}</div>
        <div><a href="/admin/order/edit/{{$aa->orderNumber}}">Edit</a></div>
        @endif
        @endforeach
      </div>
      @endforeach
    </div>
    <!-- END DATABASE -->

    <div class="back-to-basic"><a class="back-button" href="/"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
      <a class="home-button" href="javascript:history.back()"><img id="home-button" src="/img/home.svg" alt=""></a></div>
  </div>
  @endsection

  @section('script')
  <script src="{{asset ('vendor/bootstrap/js/jquery.min.js')}}"></script>
  <script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/forOrder.js')}}"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  @endsection