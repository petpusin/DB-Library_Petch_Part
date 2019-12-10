@extends('create.master')

@section('title', 'Shopping Cart')



@section('content')
<div class="cart-section container">
    <div class="CartMsg">
    @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
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

        @if (Cart::count() > 0)

        <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>
        {{$data}}
        <div class="row">

            <div class="cart">
                <div class="col-sm-12">
                    <h2>Shopping Basket</h2>

                    <div class="row">
                        <div class="col-md-12">
                            <table id="myTR">
                                <tr style="background-color: black;color: white;">
                                    <th height="60">
                                        <center>
                                            <font size="3px">ProductCode</font>
                                        </center>
                                    </th>
                                    <th width="20%">
                                        <center>
                                            <font width="10%" size="3px">ProductName</font>
                                        </center>
                                    </th>
                                    <th width="20%">
                                        <center>
                                            <font width="10%" size="3px">Stock</font>
                                        </center>
                                    </th>
                                    <th width="20%">
                                        <center>
                                            <font width="10%" size="3px">Scale</font>
                                        </center>
                                    </th>
                                    <th width="10%">
                                        <center>
                                            <font width="10%" size="3px">QTY</font>
                                        </center>
                                    </th>
                                    <th width="20%">
                                        <center>
                                            <font width="10%" size="3px">Uint Price</font>
                                        </center>
                                    </th>
                                    <th width="20%">
                                        <center>
                                            <font size="3px">Total :INR</font>
                                        </center>
                                    </th>
                                    <th width="10%">
                                        <center>
                                            <font size="3px">Update</font>
                                        </center>
                                    </th>
                                    <th width="10%">
                                        <center>
                                            <font size="3px">Delete</font>
                                        </center>
                                    </th>

                                </tr>

                                @if($data!="0")

                                @foreach ($data as $item)
                                <tr>
                                    <td>
                                        <center>{{ $item->id }}</center>
                                    </td>
                                    <td>
                                        <center>{{ $item->name }}</center>
                                    </td>
                                    <td>
                                        <center>{{$item->options->stock}}</center>
                                    </td>
                                    <td>
                                        <center>{{$item->options->size}}</center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="hidden" value="{{$item->id}}" id="id{{$item->id}}">
                                            <input type="hidden" value="{{$item->rowId}}" id="rowID{{$item->id}}">
                                            <input type="number" min="1" max="10" value="{{$item->qty}}" class="qty-fill" id="upCart{{$item->id}}"  MIN="1" MAX="30">
                                            
                                        </center>
                                    </td>
                                    <td>
                                        <center>${{$item->price}}</center>
                                    </td>
                                    <td>
                                        <center>{{$item->price * $item->qty}}</center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href=""><img src="/img/pencil.svg" alt="" width="30px" height="30px"></a></center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="{{url('admin/cart/remove')}}/{{$item->rowId}}"><img src="/img/delete.svg" alt="" width="30px" height="30px" ></a></center>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>


                        @endif
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <br>
                        </div>
                        
                        <div class="col-sm-4" id="cartTotal">
                            <div class="cart-total">
                            <br>
                                <table>
                                    <tr style="background-color: black;color: white;">
                                        <td>Total Amount</td>
                                    </tr>
                                    <tr style="background-color: white;color: black;"> 
                                        <td>Sub Total</td>
                                        <td>$ {{Cart::subtotal()}}</td>
                                    </tr >
                                    <tr style="background-color: white;color: black;">
                                        <td>Tax (%)</td>
                                        <td>$ {{Cart::tax()}}</td>
                                        <hr>
                                    </tr>


                                    <tr style="background-color: white;color: black;">
                                        <td>Grand Total</td>
                                        <td>$ {{Cart::total()}}</td>
                                    </tr>

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