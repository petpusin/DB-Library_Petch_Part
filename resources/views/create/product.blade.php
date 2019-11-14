@extends('layouts.app')

@section('title')
<title>Shopping | Product</title>
@endsection

@section('content')

<style>
    body {
        background-color:#E8E8E8;     
    }

    }
</style>


<section class="row">
    <div class="col-5 ">
        <div class="d-flex justify-content-center"><img src="img/ship.jpg" class="img-fluid" style="width:300px ; height:300px"></div>
        <div class="d-flex justify-content-center">
            <img src="img/ship.jpg" class="img-fluid" style="width:150px ; height:150px ; margin:5px">
            <img src="img/ship.jpg" class="img-fluid" style="width:150px ; height:150px ; margin:5px">        
        </div>
    </div>

    <div class="col-7">
        <div class="text-center rounded-pill py-1" style="color:#FFD400 ; background-color:black">{{ $product['productName'] }}</div>
        <hr style="background-color:black">
        <font style="font-size:20px">Description</font><br><font style="font-size:16px">Scale {{ $product->productScale }}</font><br><br>
        <p class="text-break ml-5">{{ $product->productDescription }}
        </p><br>
        <font style="font-size:16px">Stock : {{ $product->quantityInStock }}</font>
        <hr style="background-color:black">
        <div class="row mx-auto justify-content-center">
        <div  class="col-3" > <a href="{{route('admin.cart-add',['id'=> $product->productCode])}}" class="mt-4 p-2" role="button" style="background-color:black ; border:none ; color:#FFD400 ; font-size:14px">Add to Cart</a></div>
        </div>
         
    </div>
</section>
@endsection

@section('script')
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset ('vendor/bootstrap/js/jquery.min.js')}}"></script>
  <script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
