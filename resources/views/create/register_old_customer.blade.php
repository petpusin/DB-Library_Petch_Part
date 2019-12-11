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

    <h1 class="checkout-heading stylish-heading">Register Old Customer</h1>
    <div class="checkout-section">
        <div>
            <form action="{{route('admin.customer.create2chek')}}" style="display:block" method="get" id="payment-form">
                {{ csrf_field() }}
                

                <div class="form-group">
                    <label for="customerNumber">Customer Number</label>
                    <input type="number" class="form-control" id="customerNumber" name="customerNumber" value="{{ old('customerName') }}" required>

                </div>
                <button type="submit" id="complete-order" class="button-primary full-width">register</button>

@endsection