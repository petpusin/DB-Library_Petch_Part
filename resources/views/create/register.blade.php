@extends('create.master')

@section('title')
Shopping | Product
@endsection
@section('css')
<link rel="stylesheet" href="/css/register.css">
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

    <div class="for-emp-contain">
            <a href="#" id="responClicked"><img src="https://image.flaticon.com/icons/svg/60/60510.svg" alt=""></a>
        </div>

        <div class="for-emp-respon">
            <div class="for-emp-respon-grid" id="respon-menu">
            <a href="#"><img src="/img/employee.svg" alt="">Employee Resource
                    Management</a>
                <a href="#"><img src="/img/factory-stock-house.svg" alt="">Stock</a>
                <a href="#"><img src="/img/order.svg" alt="">Order</a>
                <a href="#"><img src="/img/clipboard.svg" alt="">Register</a>
                <a href="#"><img src="/img/customers.svg" alt="">Customer</a>
            </div>

        </div>

        <div>
                <form action="{{route('admin.customer.store')}}" style="display:block" method="POST" id="payment-form">
                        {{ csrf_field() }}
            <div class="form-zone">
                <div class="title-regis">Register Customer</div>
                
                <div class="grid-contain-regis">
                    
                    <div class="a-side-regis">
                        <div class="title">Customer</div>
                    </div>
                    <div class="b-side-regis">
                        <div>
                            <p>Cus.Number</p><input type="number" class="form-control" id="customerNumber" name="customerNumber" disabled value="{{$customer+1}}" required>
                        </div>
                        <div>
                            <p>Name</p><input type="text" class="form-control" id="customerName" name="customerName" value="{{ old('customerName') }}" required>
                        </div>
                        <div>
                            <p>First name</p><input type="text" class="form-control" id="contactFirstName" name="contactFirstName" value="{{ old('contactFirstName') }}" required>
                        </div>
                        <div>
                            <p>Last name</p><input type="text" class="form-control" id="contactLastName" name="contactLastName" value="{{ old('contactLastName') }}" required>
                        </div>
                        <div>
                            <p>Phone</p><input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div>

                    <div></div>

                </div>

                <div class="grid-contain-regis">

                    <div class="a-side-regis">
                        <div class="title">Addresses</div>
                    </div>
                    <div class="b-side-regis">
                        <div>
                            <p>Line1</p> <input type="text" class="form-control" id="addressLine1" name="addressLine1" value="{{ old('addressLine1') }}" required>
                        </div>
                        <div>
                            <p>Line2</p><input type="text" class="form-control" id="addressLine2" name="addressLine2" value="{{ old('addressLine2') }}" >
                        </div>
                        <div>
                            <p>City</p><input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                        </div>
                        <div>
                            <p>State</p><input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}" required>
                        </div>
                        <div>
                            <p>Postal Code</p><input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                        </div>
                        <div>
                            <p>Country</p><input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}" required>
                        </div>
                        <div>
                            <p>Sales Rep employee no.</p><input type="text" class="form-control" id="salesRepEmployeeNumber" name="salesRepEmployeeNumber"  disabled value="{{ Auth::user()->em_id }}" required>
                        </div>
                        <div>
                                <p>creditLimit</p><input type="text" class="form-control" id="creditLimit" name="creditLimit" value="{{ old('creditLimit') }}" required>
                            </div>
                    </div>

                    <div></div>

                </div>

                <div class="regis-btn"><button>Register</button> <a href="javascript:history.back()">Cancel</a></div>
            </div>
                </form>
        </div>

        <div class="back-to-basic"><a class="back-button" href="/"><img id="back-button"
                    src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="javascript:history.back()"><img id="home-button" src="/img/home.svg" alt=""></a></div>
    </div>


@endsection