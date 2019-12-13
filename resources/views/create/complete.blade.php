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


    <div class="payment-zone">
        
            <div class="header-payment">payment</div>
            
            <div class="grid-contain-payment">

                <div class="sidea">
                    <div class="txt">Customer Number</div>
                    <div class="txt">Point New</div>
                    <div class="txt">Point Total</div>
                </div>

                <div class="sideb">
                    <div><input type="text" class="form-control" id="customernumber" name="customernumber" disabled value="{{$customer->customerNumber}}"></div>
                    <div><input type="text" class="form-control" id="point" name="point" disabled value="{{$point}}"></div>
                    <div><input type="text" class="form-control" id="point" name="point" disabled value="{{$customer->point}}"></div>
                    <div>

                        <div>
                        </div>
                    </div>

                    <div></div>

                </div>

                


                </div>
                <hr>

                
            </div>
        </form>
        <div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>
    </div>
    




@endsection