@extends('create.master')

@section('css')

<link href="/css/stockEdit.css" rel="stylesheet">

@endsection

@section('title')

Shopping | Product/Edit

@endsection
@section('content')
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

        @foreach($ors as $aaa)
        <form action="{{route('admin.stock.update',$aaa)}}" method="POST">
            {{ method_field('put') }}
            {{ csrf_field() }}
        <div class="edit-stock-zone">
            <div class="header-edit-zone">Stock Edit</div>
            
            <div class="grid-contain-stocked">
                <div class="title-edit">Product</div>
                <div class="edit-detail">
                    <div>
                        <p>Code</p><p class="ans-from-dbs">{{$aaa->productCode}}</p>
                    </div>
                    <div>
                        <p>Name</p><input type="txt" name="productName" value="{{$aaa->productName}}" required >
                    </div>
                    <div>
                        <p>Line</p><select name="productline" id="productline">
                                @foreach($lines as $d)
                                <option value="{{$d->productLine}}">{{$d->productLine}}</option>
                               @endforeach
                            </select>
                    </div>
                    <div class="quanti">
                        <p>Scale</p><select name="productscale" id="productscale">
                                @foreach($scales as $s)
                            <option value="{{$s->productScale}}">{{$s->productScale}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div>
                        <p>Vendor</p>
                        <select name="productvendor" id="productvendor">
                                @foreach($vens as $v)
                            <option value="{{$v->productVendor}}">{{$v->productVendor}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="grid-contain-stocked">
                <div class="title-edit">Quantity</div>
                <div class="edit-detail">
                    <div class="quanti">
                        <p>In stock</p><input type="txt" name="qty" value="{{$aaa->quantityInStock}}" required >
                    </div>
                    <div class="quanti">
                        <p>Price</p><input type="txt" name="price" value="{{$aaa->buyPrice}}" required >
                    </div>
                    <div class="quanti">
                        <p>MSRPs</p><input type="txt" name="msrp" value="{{$aaa->MSRP}}" required >
                    </div>
                </div>
            </div>
            <div class="btn-zone"><button  type="submit" value="Update" >Save</button></div>
        </div>
        </form>
        @endforeach
       
        <div class="back-to-basic"><a class="back-button" href="javascript:history.back()"><img id="back-button"
                    src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>

    </div>

@endsection

@section('script')
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
  function success() {
    alert("Saved Success !!!");
  }
</script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="js/indexscpt.js"></script>
@endsection

