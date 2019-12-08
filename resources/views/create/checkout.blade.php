@extends('layouts.app')

@section('title')
Shopping | Product
@endsection

@section('content')
<div class="container">

    @if (session()->has('success_message'))
    <div class="spacer"></div>
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
    @endif

    @if(count($errors) > 0)
    <div class="spacer"></div>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <h1 class="checkout-heading stylish-heading">Checkout</h1>
    <div class="checkout-section">
        <div>
            <form action="" method="POST" id="payment-form">
                {{ csrf_field() }}
                <h2>Billing Details</h2>

                <div class="form-group">
                <label for="name">Customer Number</label>
                    <input type="number" class="form-control" id="cusnum" name="cusnum" value="{{ old('customerNumber') }}" required>
                    
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="name">Lastname</label>
                    <input type="text" class="form-control" id="lname" name="lname" value="{{ old('lname') }}" required>
                </div>
                <div class="form-group">
                    <label for="name">FirstName</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="{{ old('fname') }}" required>
                </div>
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                </div>
                <div class="form-group">
                    <label for="address">AddressLine1</label>
                    <input type="text" class="form-control" id="addressl1" name="addressl1" value="{{ old('addressl1') }}" required>
                </div>
                <div class="form-group">
                    <label for="address">AddressLine2</label>
                    <input type="text" class="form-control" id="addressl2" name="addressl2" value="{{ old('addressl2') }}" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="half-form">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="province">Province</label>
                        <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                    </div>
                </div> <!-- end half-form -->

                <div class="half-form">
                    <div class="form-group">
                        <label for="postalcode">Postal Code</label>
                        <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Country</label>
                        <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}" required>
                    </div>
                </div> <!-- end half-form -->

                <div class="spacer"></div>


                <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>


            </form>

          
        </div>



        <div class="checkout-table-container">
            <h2>Your Order</h2>

            <div class="checkout-table">
                @foreach (Cart::content() as $item)
                <div class="checkout-table-row">
                    <div class="checkout-table-row-left">
                        <img src="" alt="item" class="checkout-table-img">
                        <div class="checkout-item-details">
                            <div class="checkout-table-item">{{ $item->name }}</div>
                            <div class="checkout-table-description">{{ $item->details }}</div>
                            <div class="checkout-table-price">{{ $item->price }}</div>
                        </div>
                    </div> <!-- end checkout-table -->

                    <div class="checkout-table-row-right">
                        <div class="checkout-table-quantity">{{ $item->qty }}</div>
                    </div>
                </div> <!-- end checkout-table-row -->
                @endforeach

            </div> <!-- end checkout-table -->

            <div class="checkout-totals">
                <div class="checkout-totals-left">
                    Subtotal <br>
                    @if (session()->has('coupon'))
                    Discount ({{ session()->get('coupon')['name'] }}) :
                    <br>
                    <hr>
                    New Subtotal <br>
                    @endif
                    Tax ({{config('cart.tax')}}%)<br>
                    <span class="checkout-totals-total">Total</span>

                </div>

                <div class="checkout-totals-right">
                        {{ Cart::subtotal() }} <br>
                        
                        {{ Cart::tax() }} <br>
                        <span class="checkout-totals-total">{{ Cart::total() }}</span>

                    </div>

               
            </div> <!-- end checkout-totals -->
        </div>

    </div> <!-- end checkout-section -->
</div>
@endsection