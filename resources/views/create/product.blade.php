@extends('layouts.app')

@section('title', $product->productName)



@section('content')



<div class="container">
    @if (session()->has('success_message'))
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
    @endif

    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

<div class="product-section container">
    <div>
        <div class="product-section-image">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
        </div>
    </div>
    <div class="product-section-information">
        <h1 class="product-section-title">{{ $product->productName }}</h1>
        <div class="product-section-subtitle">{{ $product->productDescription }}</div>
        <div>{{$product->quantityInStock}}</div>
        <div class="product-section-price">{{ $product->presentPrice() }}</div>

        <p>
            {!! $product->productDescription !!}
        </p>

        <p>&nbsp;</p>

        @if ($product->quantityInStock > 0)
        <form action="" method="POST">
            {{ csrf_field() }}
            <button type="submit" class="button button-plain">Add to Cart</button>
        </form>
        @endif
    </div>
</div> <!-- end product-section -->



@endsection

@section('script')
<script>
    (function() {
        const currentImage = document.querySelector('#currentImage');
        const images = document.querySelectorAll('.product-section-thumbnail');

        images.forEach((element) => element.addEventListener('click', thumbnailClick));

        function thumbnailClick(e) {
            currentImage.classList.remove('active');

            currentImage.addEventListener('transitionend', () => {
                currentImage.src = this.querySelector('img').src;
                currentImage.classList.add('active');
            })

            images.forEach((element) => element.classList.remove('selected'));
            this.classList.add('selected');
        }

    })();
</script>

<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<!-- <script src="{{ asset('js/algolia.js') }}"></script> -->

@endsection