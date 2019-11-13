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
        <div class="text-center rounded-pill py-1" style="color:#FFD400 ; background-color:black">NAME OF PRODUCT</div>
        <hr style="border:solid 1px black">
        <font>Description</font>
        <p class=" text-break ml-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

        </p>
        <hr style="border:solid 1px black">
        <div class="row mx-auto justify-content-center">
            <div class="col-3"><button type="button" class="mt-4 p-2" style="background-color:black ; border:none ; color:#FFD400 ; font-size:14px">ADD TO CART</button></div>
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