@extends('create.master')

@section('title')
Shopping | Stock
@endsection

@section('css')
<link rel="stylesheet" href="/css/stock.css">
@endsection


@section('content')



<!-- make table resposive -->
<div class="table-responsive">
    <div class="container text-center">
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
    <div class="container">
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
        <!-- STOCK HEADER -->

        <div class="search-field">
            <div class="filter-grid-container">
                <div class="filter-item1">
                    <img id="filter-mag" src="/img/magnifying-glass.svg" alt="">
                    <select name="" id="">
                        <option value="" disabled selected>Title</option>
                        <option value="">Code</option>
                        <option value="">Name</option>
                        <option value="">Line</option>
                        <option value="">Scale</option>
                        <option value="">Vendor</option>
                    </select></div>

                <div class="filter-item2">
                    <input type="text" placeholder="search key">
                </div>

            </div>
        </div>

        <div class="grid-for-stockheader">Stock</div>
        <div class="grid-for-addstock"><a href="{{route('admin.stock.create')}}">Add Stock[+]</a></div>
        
        <div class="grid-contain-head-stock">
            <div>code</div>
            <div>name</div>
            <div>line</div>
            <div>scale</div>
            <div>vendor</div>
            <div>Description</div>
            <div>in stock</div>
            <div>Price</div>
            <div>Msrp</div>
            <div>Tools</div>
        </div>

        <!-- FROM DATABASE -->
        @foreach($product as $data)
        <div class="grid-contain-dbs-stock">
            <div>{{$data->productCode}}</div>
            <div>{{$data->productName}}</div>
            <div>{{$data->productLine}}</div>
            <div>{{$data->productScale}}</div>
            <div>{{$data->productVendor}}</div>
            <div>{{$data->productDescription}}</div>
            <div>{{$data->quantityInStock}}</div>
            <div>{{$data->buyPrice}}</div>
            <div>{{$data->MSRP}}</div>
            <div><a href="/admin/stock/edit/{{$data->productCode}}">Edit</a><br><br><a id="delete-button" href="{{route('admin.stock.delete',$data->productCode)}}">Delete</a></div>
        </div>
        @endforeach

        <!-- END DATABASE -->

        <div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>
    </div>
       
@endsection

