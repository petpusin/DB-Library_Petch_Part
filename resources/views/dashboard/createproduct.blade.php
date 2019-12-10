@extends('layouts.app')

@section('title')
Stock | insert
@endsection
@section('head')

<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
@endsection
@section('content')
<!-- 'productCode','productName','productScale','productVendor','productLine','productDescription','quantityInStock','buyPrice','MSRP' -->
    <h3>Add Product</h3>
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <form method="post" action="{{ route('admin.stock.store') }}">
        {{ csrf_field() }}
        <div class="form-group">            
            <label for="title">productCode</label>
            <input type="text" class="form-control" name="productcode" id="productcode"placeholder=""/>
        </div>
        <div class="form-group">            
            <label for="title">productName</label>
            <input type="text" class="form-control" name="productname" id="productname" placeholder="Title"/>
        </div>
        <div class="form-group">            
            <label for="title">productLine</label>
            <input type="text" class="form-control" name="productline" id="productline" placeholder="Title"/>
        </div>
        <div class="form-group">            
            <label for="title">productScale</label>
            <input type="text" class="form-control" name="productscale" id="productscale" placeholder="Title"/>
        </div>
        <div class="form-group">            
            <label for="title">productVendor</label>
            <input type="text" class="form-control" name="productvender" id="productvender" placeholder="Title"/>
        </div>
        <div class="form-group">
            <label for="body">productDescription</label>
            <textarea class="form-control" name="productdes" id="productdes" cols="30" rows="10" placeholder="Body Text"></textarea>
        </div>
        <div class="form-group">            
            <label for="title">quantityInStock</label>
            <input type="number" class="form-control" name="productqty" id="productqty" placeholder="Title"/>
        </div>
        <div class="form-group">            
            <label for="title">buyPrice</label>
            <input type="number" class="form-control" name="productprice" id="productprice" placeholder="Title"/>
        </div>
        <div class="form-group">            
            <label for="title">MSRP</label>
            <input type="number" class="form-control" name="productmsrp" id="productmsrp" placeholder="Title"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
 </form>
        </div>
    </div>
@endsection
