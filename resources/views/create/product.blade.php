@extends('create.master')

@section('title')
Shopping | Product
@endsection

@section('content')


<div class="container">

        <div class="grid-shop-details-items">
            <div id="side-a">
                <div><img id="exam-1" src="/img/{{ $product->productLine}}.svg" alt=""></div>
                <div class="grid-product-exam">
                    <div><img id="exam-2" src="/img/{{ $product->productLine }}.svg" alt=""></div>
                    <div><img id="exam-3" src="/img/{{ $product->productLine }}.svg" alt=""></div>
                </div>
            </div>
            <div id="side-b">
                <div class="stock-name">{{ $product->productName }}</div>
                <div class="stock-price">Price ${{ $product->buyPrice }}</div>
                <hr>
                <div class="stock-vendor">Vendor {{ $product->productVendors }}</div>
                <div class="stock-scale">Scale {{ $product->productScale }}</div>
                <div class="stock-desc">
                        {{ $product->productDescription }}
                </div>
                <hr>
                <br>
                <div class="add-to-card" ><button onclick="location.href='{{route('admin.cart-add',['id'=> $product->productCode])}}' ">Add to cart</button></div>
            </div>
        </div>


        <div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>
    </div>
@endsection

@section('script')
  <script src="/js/indexscpt.js"></script>
@endsection
