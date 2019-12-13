@extends('create.master')

@section('title', 'Shopping Cart')
@section('css')
<link rel="stylesheet" href="/css/shopBastket.css">
@endsection


@section('content')
<div class="container">
    <div class="CartMsg">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        @if(session('status'))
        <div class="alert alert-success">

            {{session('status')}}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">

            {{session('error')}}
        </div>
        @endif
       
        {{ session()->get('coupon')['discount'] }}
        @if (Cart::count() > 0)

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


        <div class="contain-basket-box">

            <div class="header-basket">Shopping Bastket</div>
            <div>
                <div class="inline-box underline">{{Cart::count()}}</div>
                <div class="inline-box push-left">item(s) in Shipping Cart</div>
            </div>
            <div class="grid-contain-display-bastket title-basket">
                <div>Code</div>
                <div>Name</div>
                <div>Stock</div>
                <div>Scale</div>
                <div>QTY</div>
                <div>Unit Price</div>
                <div>Total:INR</div>
                <div></div>
            </div>

            <!-- YOU CAN FORLOOP HERE -->
            @if($data!="0")
            @foreach ($data as $item)
            <div class="grid-contain-display-bastket detail-bas">
                <div>{{ $item->id }}</div>
                <div>{{ $item->name }}</div>
                <div>{{$item->options->stock}}</div>
                <div>{{$item->options->size}}</div>
                <div>
                    <input type="hidden" value="{{$item->id}}" id="id{{$item->id}}">
                    <input type="hidden" value="{{$item->rowId}}" id="rowID{{$item->id}}">
                    <input type="number" min="1" max="10" value="{{$item->qty}}" class="qty-fill" id="upCart{{$item->id}}" MIN="1" MAX="30">
                </div>
                <div>${{$item->price}}</div>
                <div>{{$item->price * $item->qty}}</div>
                <div><a href="#"><img src="/img/confirm.svg" alt=""></a> 
                    <a href="{{url('admin/cart/remove')}}/{{$item->rowId}}"><img
                            src="/img/rubbish-bin-delete-button.svg" alt=""></a></div>
            </div>
            @endforeach
            @endif
            <!-- END FOR -->

            
            <div class="grid-contain-total-zone">
            
                <div class="skip-regis">
                        
                    <div class="skip-regis-topic">
                        @if(!session()->has('coupon'))
                        <p>Have a Code ? <img src="img/keyboard.svg" alt=""></p>
                        <div><form action="{{ route('coupon.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="text" name="coupon_code" id="coupon_code">
                                <button type="submit" class="button button-plain">Apply</button>
                            </form></div>
                        @else
                        <p>Discount</p>
                        <div>({{ session()->get('coupon')['name'] }}) :
                        @if (session()->get('coupon')['free'])
                                            {{ session()->get('coupon')['type'] }}
                                            @endif
                                            <form action="{{ route('coupon.destroy') }}" method="POST" style="display:inline">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" style="font-size:10px">Remove</button>
                                            </form></div>
                                            @endif
                                            
                    </div>
                    <form action="/admin/checkout" style="display:block" method="POST" id="payment-form">
                    {{ method_field('put') }}    
                    {{ csrf_field() }}
                    <div class="info">
                        <p>Customer Name</p><input type="text" class="form-control" id="customername" name="customername" value="{{ old('customerName') }}" required>
                    </div>
                    <div class="info">
                        <p>Order Date</p><input type="date" name="orderdate" id="orderdate" value="{{ old('orderDate') }}" required pattern="\d{4}-\d{2}-\d{2}">
                    </div>
                    <div class="info">
                        <p>Required Date</p><input type="date" name="requiredDate" id="requiredDate" value="{{ old('orderdate') }}" required pattern="\d{4}-\d{2}-\d{2}">
                    </div>
                    <div class="info">
                        <p>Comment</p><input type="text" class="form-control" id="comments" name="comments" value="{{ old('comments') }}">
                    </div>
                    <input type="hidden"  step="0.01" name="discount" value="{{ session()->get('coupon')['discount'] }} " >
                    <div class="chk-out"><button>Checkout</button></div>
                    </form> 

                </div>

                <div class="grid-title-and-dbs">
                    <div class="total">Total Amount</div>
                    <div class="grid-ans-dbs total-2nd">
                        <div class="a-side-total">
                            <div>Sub Total</div>
                            @if (session()->has('coupon'))
                            <div>Discount</div>
                            <div>New Subtotal</div>
                            @endif
                            
                            <div>Tax (%)</div>
                            <div class="highlight">TGrand Total</div>

                        </div>
                        <div>

                            <div>${{Cart::subtotal()}}</div>
                            @if (session()->has('coupon'))
                            <div>$ @if(session()->has('coupon'))
                                    -${{ session()->get('coupon')['discount'] }} 
                                    <!-- <input type="hidden"  step="0.01" name="discount" value="{{ session()->get('coupon')['discount'] }} " > -->
                                </div>@endif
                            
                            
                                                @endif
                            <div></div>
                            @if (session()->has('coupon'))
                            <div>${{ $newSubtotal }}</div>
                            @endif
                            <div>${{ $newTax }}</div>
                            
                            <div class="highlight">${{ $newTotal }}</div>
                            
                        </div>
                    </div>
                    
                </div>
                <div></div>
            </div>
            @else
            <div class="con-zone"><a href="/">Continue Shopping</a></div>
            @endif
        </div>


        <div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>




    </div> <!-- end saved-for-later -->

</div>

</div> <!-- end cart-section -->



@endsection

@section('script')
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#CartMsg").hide();
        @foreach($data as $items)
        $("#upCart{{$items->id}}").on('change keyup', function() {
            var newQty = $("#upCart{{$items->id}}").val();
            var rowID = $("#rowID{{$items->id}}").val();
            var ID = $("#id{{$items->id}}").val();
            if (newQty <= 0) {
                alert('enter only number value')
            } else {
                $.ajax({
                    url: '{{url('admin/cart/update')}}',
                    data: 'rowID=' + rowID + '&ID=' + ID + '&newQty=' + newQty,
                    type: 'get',
                    success: function(response) {
                        $("#CartMsg").show();
                        console.log(response);
                        $("#CartMsg").html(response);
                    }
                })
            }
        });
        @endforeach
    });
</script>



@endsection