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
            <a href="#"><img src="https://image.flaticon.com/icons/svg/1319/1319495.svg" alt="">Employee Resource
                Management</a>
            <a href="#"><img src="https://www.flaticon.com/premium-icon/icons/svg/1009/1009874.svg" alt="">Stock</a>
            <a href="#"><img src="https://image.flaticon.com/icons/svg/1252/1252355.svg" alt="">Order</a>
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
                            <p>Scale</p><input type="text" class="form-control" name="productscale" id="productscale" placeholder="">
                        </div>
                        <div class="form-add-product">
                            <p>Vendor</p><input type="text" class="form-control" name="productvender" id="productvender" placeholder="">
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
                    <p>Instock</p><input type="number" class="form-control" name="productqty" id="productqty" placeholder="">
                    <p>Price</p><input type="number" class="form-control" name="productprice" id="productprice" placeholder="">
                    <p>MSRP</p><input type="number" class="form-control" name="productmsrp" id="productmsrp" placeholder="Title">
                </div>
            </div>

            <div class="submmit-btn"><button>Submit</button></div>
    </div>
    </form>
    <div class="back-to-basic"><a class="back-button" href="#"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
        <a class="home-button" href="#"><img id="home-button" src="/img/home.svg" alt=""></a></div>

</div>
@endsection