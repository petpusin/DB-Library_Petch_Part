
@extends('layouts.app')

@section('title', $product->productName)



@section('content')



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
         <hr style="border:solid 1px black">
         <font>Description</font>
         <p class=" text-break ml-5">{{ $product->productDescription }}
         <font>Scale</font>
         <p class=" text-break ml-5">{{ $product->productScale }}

         </p>
         </p>
         <font>Price</font>
         <p class=" text-break ml-5">{{ $product->buyPrice }}

         </p>
         <hr style="border:solid 1px black">
         <div class="row mx-auto justify-content-center">
             <div class="col-3"><button type="button" class="mt-4 p-2" style="background-color:black ; border:none ; color:#FFD400 ; font-size:14px">ADD TO CART</button></div>
         </div>
         <div>
           <a href="{{route('cart.add',['id'=> $product->productCode])}}" class="btn btn-success pull-right" role="button">Add to Cart</a>
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

 

