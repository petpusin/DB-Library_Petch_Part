@extends('layouts.app')

@section('title', 'Shopping Cart')



@section('content')



<div class="cart-section container">
    <div>
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

        @if (Cart::count() > 0)

        <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>
        {{$data}}
        <div class="row">

            <div class="cart">
                <div class="col-sm-12">
                    <h2>Shopping Basket</h2>
                    <div class="row">
                        <div class="col-sm-8">
                            @if($data!="0")
                            @foreach ($data as $item)
                            <div class="cart-row">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                                        <span class="pull-left top20"><strong>{{ $item->name }}</strong> </span>
                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3">
                                        <div class="cart-qty"> <span>Qty :</span>
                                            <input type="text" class="qty-fill" value="{{$item->qty}}">
                                        </div>
                                        <div class="cart-remove">Update</div>
                                        <a href="{{url('cart/remove')}}/{{$item->rowId}}" class="cart-remove">Remove</a>
                                    </div>
                                    <div class="col-sx-12 col-sm-3 col-md-3">
                                        <h6>Uint Price</h6>
                                        <p>${{$item->price}}</p>
                                        <hr>
                                        <h6 class="redtext">Total :INR
                                            {{$item->price * $item->qty}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            <div class="col-xs-12 col-sm-12 col-md-6">

                            </div>
                        </div>
                        <div class="col-sm-4" id="cartTotal">
                            <div class="cart-total">
                                <h4>Total Amount</h4>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>$ {{Cart::subtotal()}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tax (%)</td>
                                            <td>$ {{Cart::tax()}}</td>
                                        </tr>


                                        <tr>
                                            <td>Grand Total</td>
                                            <td>$ {{Cart::total()}}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <a href="{{url('checkout')}}" class="btn check_out btn-block">checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end cart-table-row -->


        </div> <!-- end cart-table -->



        <div class="cart-totals">
            <div class="cart-totals-left">
                Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
            </div>

            <div class="cart-totals-right">
                <div>
                </div>
            </div>
        </div> <!-- end cart-totals -->

        <div class="cart-buttons">
            <a href="/" class="button">Continue Shopping</a>
            <!-- <a href="" class="button-primary">Proceed to Checkout</a> -->
        </div>

        @else

        <h3>No items in Cart!</h3>
        <div class="spacer"></div>
        <a href="/" class="button">Continue Shopping</a>
        <div class="spacer"></div>

        @endif




    </div> <!-- end saved-for-later -->

</div>

</div> <!-- end cart-section -->



@endsection

@section('script')
<script src="{{ asset('js/app.js') }}"></script>
<script>
    (function() {
        const classname = document.querySelectorAll('.quantity')

        Array.from(classname).forEach(function(element) {
            element.addEventListener('change', function() {
                const id = element.getAttribute('data-id')
                const productQuantity = element.getAttribute('data-productQuantity')

                axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function(response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function(error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
            })
        })
    })();
</script>

<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('js/algolia.js') }}"></script>
@endsection