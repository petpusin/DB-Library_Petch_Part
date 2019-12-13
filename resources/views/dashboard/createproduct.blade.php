@extends('create.master')

@section('title')
Stock | insert
@endsection
@section('css')
<link rel="stylesheet" href="/css/stockadd.css">
@endsection

@section('content')
<!-- 'productCode','productName','productScale','productVendor','productLine','productDescription','quantityInStock','buyPrice','MSRP' -->
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

    <form method="post" action="{{ route('admin.stock.store') }}">
            {{ csrf_field() }}
    <div class="grid-contain-addproduct">
        
            <div class="head-addproduct">[+] Add Product</div>
            <div class="grid-contain-1">
                <div class="product-main">Product</div>
                <div class="about-product">

                    <form action="">

                        <div class="form-add-product">
                            <p>Code</p><input type="text" class="form-control" name="productcode" id="productcode" placeholder="">
                        </div>
                        <div class="form-add-product">
                            <p>Name</p><input type="name" class="form-control" name="productname" id="productname" placeholder="">
                        </div>
                        <div class="form-add-product">
                            <p>Line</p><select name="productline" id="productline">
                                <option value="0" disabled selected>product line</option>
                                @foreach($productlines as $pl)
                                <option value="{{$pl->productLine}}">{{$pl->productLine}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-add-product">
                            <p>Scale</p><select name="productscale" id="productscale">
                                <option value="0" disabled selected>product Scale</option>
                                @foreach($scales as $s)
                                <option value="{{$s->productScale}}">{{$s->productScale}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-add-product">
                            <p>Vendor</p>
                            <select name="productvender" id="productvender">
                                <option value="0" disabled selected>product Vendors</option>
                                @foreach($vens as $v)
                                <option value="{{$v->productVendor}}">{{$v->productVendor}}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
                <div>

                </div>
            </div>
            <div class="gird-contain-2">
                <div class="desc-main">Description</div>
                <div><textarea name="productdes" id="productdes" cols="30" rows="10"></textarea></div>
                <div></div>
            </div>
            <div class="grid-contain-3">
                <div class="quanti-main">Quantity</div>
                <div class="quanti-details">
                    <p>Instock</p><input type="text" class="form-control" name="productqty" id="productqty" placeholder="">
                    <p>Price</p><input type="text" class="form-control" name="productprice" id="productprice" placeholder="">
                    <p>MSRP</p><input type="text" class="form-control" name="productmsrp" id="productmsrp" placeholder="Title">
                </div>
            </div>

            <div class="submmit-btn"><button>Submit</button></div>
    </div>
    </form>
    <div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>

</div>
@endsection