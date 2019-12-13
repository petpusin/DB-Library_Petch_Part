@extends('create.master')

@section('css')

<link rel="stylesheet" href="/css/payment.css">

@endsection

@section('title')

Shopping | Payment

@endsection
@section('content')
<div class="container">

    <div class="for-emp-contain">

        
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

           

        </div>

    </div>


    <div class="payment-zone">
        <form action="/admin/payment/complete/" method="POST" >
        {{ method_field('put') }}
            {{ csrf_field() }}
            <div class="header-payment">payment</div>
            
            <div class="grid-contain-payment">

                <div class="sidea">
                    <div class="txt">Customer Number</div>
                    <div class="txt">Payment Number</div>
                    <div class="txt">Payment Date</div>
                    <div class="txt">Amount</div>
                </div>

                <div class="sideb">
                    <div><input type="text" class="form-control" id="customernumber" name="customernumber" value="{{$customernumber}}"required ></div>
                    <div><input type="text" class="form-control" id="checknumber" name="checknumber" max:6 required></div>
                    <div><input type="date" class="form-control" id="paymentdate" name="paymentdate" required></div>
                    <div><input type="number" step="0.01" class="form-control" id="amount" name="amount" max:10 required></div>
                    <div>

                        <div>
                        </div>
                    </div>

                    <div></div>

                </div>

                


                </div>
                <hr>

                <div class="btn-zone"><button>Accept</button></div>
            </div>
        </form>
        <div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>
    </div>
   




@endsection