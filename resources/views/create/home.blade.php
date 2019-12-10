@extends('create.master')

@section('title')
Categories | Digital Shop
@endsection

    <!-- CONTENT -->
@section('content')
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

    <script src="/js/indexscpt.js"></script>
@endsection