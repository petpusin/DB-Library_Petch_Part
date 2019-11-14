@extends('layouts.app')

@section('title')
Shopping | Product
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
        <hr style="background-color:black">
        <font style="font-size:20px">Description</font><br><font style="font-size:16px">Scale 1:50</font><br><br>
        <p class="text-break ml-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

        </p><br>
        <hr style="background-color:black">
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
