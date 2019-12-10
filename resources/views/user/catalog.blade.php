@extends('create.master')

@section('title')
Categories | Digital Shop
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

  <!-- FILTER -->
  <div class="container">
    <div class="filter-grid-container">
      <div class="filter-item1">
        <img id="filter-mag" src="/img/magnifying-glass.svg" alt="">
        <select name="" id="" value-group="scale">
          <option value="">Scales</option>
          @foreach($productscales as $data)
          <option value=".{{$data->removespacescale()}}" class="option" >{{$data->productScale}}</option>
          @endforeach
        </select></div>
      <div class="filter-item2">
        <select name="" id="" value-group="vender">
          <option value="">Vendors</option>
          @foreach($productvendors as $data)
          <option value=".{{$data->removespace()}}" class="option">{{$data->productVendor}}</option>
          @endforeach
        </select></div>
    </div>
  </div>
  <!-- PRODUCT LIST -->

  <div class="product-grid" id="productData">
    @forelse($products as $row)
    <div class="p-item">
      <div class="p-item-flex {{ $row->removespace() }} {{ $row->removespacescale()}}" id="">
        <div class="product-img"><a href="#"><img id="shop-list-img" src="/img/{{ $row->productLine}}.svg" alt=""></a>
        </div>

        <div>
          <h5 id="name">{{ $row['productName'] }}</h5>
          <h3 id="price">{{ $row['buyprice'] }}</h3>
          <div class="grid-contain-scale-ven">
            <div id="vender">Vendor {{ $row['productVendor'] }}</div>
            <div id="scale">Scale {{ $row['productScale'] }}</div>
          </div>
          <hr>
          <div class="grid-details">
            <div id="more-info"><a href="/catalog/{{$row['productLine']}}/{{$row['productCode']}}">More Details</a></div>
            @if(Auth::guard('admin')->check())
            <div><a href="#"><a href="#"><img id="edit-button" src="/img/edit-gray-blue.svg" alt=""></a></a></div>
            @endif
          </div>
        </div>

      </div>
    </div>
    @empty
    <div class="">
      No Item
    </div>
    @endforelse
  </div>
  <br>
  
  @endsection
  @section('script')
  <script src="/js/indexscpt.js"></script>
  
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<!-- or -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
  <script>
    var $grid = $('.p-item').isotope({
      itemSelector: '.p-item-flex'
    });

    // store filter for each group
    var filters = {};

    $('.filter-grid-container').on('change', function(event) {
      var $select = $(event.target);
      // get group key
      var filterGroup = $select.attr('value-group');
      // set filter for group
     
      filters[filterGroup] = event.target.value;
      // combine filters
      var filterValue = concatValues(filters);
      // set filter for Isotope
      $grid.isotope({filter: filterValue});
      console.log(filters);
    });

    // flatten object by concatting values
    function concatValues(obj) {
      var value = '';
      for (var prop in obj) {
        value += obj[prop];
      }
      return value;
    }
  </script>

  @endsection