@extends('create.master')

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

    <h1 class="checkout-heading stylish-heading">Register Customer</h1>
    <div class="checkout-section">
        <div>
            <form action="{{route('admin.customer.store')}}" style="display:block" method="POST" id="payment-form">
                {{ csrf_field() }}
                

                <div class="form-group">
                    <label for="customerNumber">Customer Number</label>
                    <input type="number" class="form-control" id="customerNumber" name="customerNumber" disabled value="{{$customer+1}}" required>

                </div>
                <div class="form-group">
                    <label for="customerName">Name</label>
                    <input type="text" class="form-control" id="customerName" name="customerName" value="{{ old('customerName') }}" required>
                </div>
                <div class="form-group">
                    <label for="contactLastName">Lastname</label>
                    <input type="text" class="form-control" id="contactLastName" name="contactLastName" value="{{ old('contactLastName') }}" required>
                </div>
                <div class="form-group">
                    <label for="contactFirstName">FirstName</label>
                    <input type="text" class="form-control" id="contactFirstName" name="contactFirstName" value="{{ old('contactFirstName') }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                </div>
                <div class="form-group">
                    <label for="addressLine1">AddressLine1</label>
                    <input type="text" class="form-control" id="addressLine1" name="addressLine1" value="{{ old('addressLine1') }}" required>
                </div>
                <div class="form-group">
                    <label for="addressLine2">AddressLine2</label>
                    <input type="text" class="form-control" id="addressLine2" name="addressLine2" value="{{ old('addressLine2') }}" required>
                </div>
                <div class="half-form">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}" required>
                    </div>
                </div> <!-- end half-form -->

                <div class="half-form">
                    <div class="form-group">
                        <label for="postalcode">Postal Code</label>
                        <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="salesRepEmployeeNumber">salesRepEmployeeNumber</label>
                        <input type="text" class="form-control" id="salesRepEmployeeNumber" name="salesRepEmployeeNumber"  disabled value="{{ Auth::user()->em_id }}" required>
                    </div>
                    <div class="form-group">
                        <label for="creditLimit">creditLimit</label>
                        <input type="number" class="form-control" id="creditLimit" name="creditLimit" value="{{ old('creditLimit') }}" required>
                    </div>
                    
                </div> <!-- end half-form -->

                <div class="spacer"></div>


                <button type="submit" id="complete-order" class="button-primary full-width">register</button>


            </form>

            




        </div>

@endsection