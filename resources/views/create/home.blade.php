@extends('create.master')

@section('title')
Categories | Digital Shop
@endsection
@section('job')
{{Auth::user()->employee->jobTitle}}
@endsection
    <!-- CONTENT -->
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

        <div class="grid-cover">
            <div class="cover">
                Categories
            </div>

        </div>
        <div class="shop-title">
            <div>Shop now</div>
        </div>
        <div class="grid-items">
            @foreach($productline as $data)
            <div class="item">
                <div><a href="/catalog/{{$data->productLine}}" class="a-tag-pic"><img src="/img/{{$data->productLine}}.svg" alt=""></a></div>
                <div><a href="#">
                        <h1>{{$data->productLine}}</h1>
                    </a></div>
                <div>
                    <p>{{$data->textDescription}}</p>
                </div>

            </div>
            @endforeach
            
        </div>
    </div>

    <!-- FOOTER -->
@endsection
@section('script')

    
@endsection