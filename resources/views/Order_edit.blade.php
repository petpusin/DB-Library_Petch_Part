@extends('create.master')

@section('css')

<link href="/css/orderEdit.css" rel="stylesheet">

@endsection

@section('title')

Shopping | Order/Edit

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

  <!-- EDIT ORDER -->
  <div class="grid-all-edit-order">
    <div class="grid-edit-order-head">EDIT ORDER</div>
    @foreach($or as $aaa)
    <div class="grid-contain-edit-order">
      <div class="head-edit">Details</div>
      <div>
        <div>
          <p class="title-head">Number</p>
          <p class="ans-from-dbs">{{$aaa->orderNumber}}</p>
        </div>
        <div>
          <p class="title-head">Date</p>
          <p class="ans-from-dbs">{{$aaa->orderDate}}</p>
        </div>
        <div>
          <p class="title-head">Require Date</p>
          <p class="ans-from-dbs">{{$aaa->requiredDate}}</p>
        </div>
        @foreach($cus as $bbb)
        @if($aaa->customerNumber == $bbb->customerNumber)
        <div>
          <p class="title-head">First Name</p>
          <p class="ans-from-dbs">{{$bbb->contactFirstName}}</p>
        </div>
        <div>
          <p class="title-head">Last Name</p>
          <p class="ans-from-dbs">{{$bbb->contactLastName}}</p>
        </div>
      </div>
      <div></div>

    </div>
    @endif
    @endforeach
    <form action="update/{{$aaa->orderNumber}}" method="post">
      {{ method_field('put') }}
      {{ csrf_field() }}
      <div class="grid-contain-edit-order">
        <div class="head-edit">Edit</div>
        <div>
          <div>
            <p class="title-head">Shipped Dated</p><input type="date">
          </div>
          <div>
            <p class="title-head">Status</p>@if($aaa->status == "Cancelled")
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
          </div>
          <div>
            <p class="title-head">Comment</p><textarea name="" id="" cols="30" rows="2">{{$aaa->comments}}</textarea>
          </div>
        </div>
        <div></div>
        <div class="grid-contain-edit-order">
          <div></div>
          <div class="for-button-save">
            <button onclick="success()" value="Save">Save</button>
          </div>
          <div></div>

        </div>
    </form>
    @endforeach

  </div>
</div>


<div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>
</div>

@section('content')

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
<script src="js/indexscpt.js"></script>
@endsection

