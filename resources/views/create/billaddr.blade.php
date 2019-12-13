@extends('create.master')

@section('css')

<link rel="stylesheet" href="/css/payment.css">

@endsection

@section('title')

Shopping | BillAddress

@endsection
@section('content')
<div class="container">

        <div class="for-emp-contain">

            <!-- UPDATE NAV HERE 3/3-->
            <a href="#" id="responClicked"><img src="/img/list-menu.svg" alt=""></a>
        </div>

        <div class="for-emp-respon">
            <div class="for-emp-respon-grid" id="respon-menu">

                <a href="#"><img src="/img/employee.svg" alt="">Employee Resource
                    Management</a>
                <a href="#"><img src="/img/factory-stock-house.svg" alt="">Stock</a>
                <a href="#"><img src="/img/order.svg" alt="">Order</a>
                <a href="#"><img src="/img/clipboard.svg" alt="">Register</a>
                <a href="#"><img src="/img/customers.svg" alt="">Customer</a>
                <a href="#"><img src="/img/coupon.svg" alt="">Coupon</a>

                <!-- END UPDATE NAV HERE 3/3-->

            </div>

        </div>
        
        <form action="/admin/bill/{{$orderm}}" method="POST">
        {{ method_field('put') }}
                        {{ csrf_field() }}
            <div class="payment-zone">
                <div class="header-payment">payment</div>
                <div class="grid-contain-payment">

                    <div class="sidea">
                        <div class="txt">Order Number</div>

                    </div>

                    <div class="sideb">
                        <div><input type="number" class="form-control" id="orderm" name="orderm" disabled value="{{$orderm}}"></div>
                        

                    </div>

                    <div></div>

                </div>

                <div class="grid-contain-payment">

                    <div></div>

                </div>
                <div class="txt multiaddr">Address(es)</div>
                                    <select name="idm" id="idm">
                                        @foreach($multi as $a)
                                        <option value="{{$a->id}}" selected>{{$a->addressLine1}} {{$a->addressLine2}} {{$a->city}} {{$a->state}} {{$a->postalCode}} {{$a->country}}</option>
                                        @endforeach
                                    </select>
                
                
                <div class="btn-zone"><button>Accept</button></div>
            </div>
        </form>


        <div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>
    </div>
    
@endsection