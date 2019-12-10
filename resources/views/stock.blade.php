@extends('create.master')

@section('title')
Shopping | Stock
@endsection

@

@section('content')

<h1 class="display-4 text-center mb-4 text-light">STOCK</h1>

<!-- make table resposive -->
<div class="table-responsive">
    <div class="container text-center">
    @if (session()->has('success_message'))
    <div class="spacer"></div>
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
    @endif

    @if(count($errors) > 0)
    <div class="spacer"></div>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    @endif

        <table class="col-md-12" style="margin-bottom:50px;">

            <tr class="text-weight-light text-center" style="background-color: black;color: white;">
                <th class="font-weight-light">productCode</th>
                <th class="font-weight-light">productName</th>
                <th class="font-weight-light">productScale</th>
                <th class="font-weight-light">productVendor</th>
                <th class="font-weight-light">productDescription</th>
                <th class="font-weight-light">productLine</th>
                <th class="font-weight-light">quantityInStock</th>
                <th class="font-weight-light">buyPrice</th>
                <th class="font-weight-light">MSRP</th>
                <th class="font-weight-light" style="color:red"  >ADD</th>
            </tr>
        
            <tr style="background-color:black;opacity:0.95;height:50px">

                <td>
                    <input type="text" placeholder="">
                </td>
                <td>
                    <input type="text" placeholder="">
                </td>
                <td>
                    <input type="text" placeholder="">
                </td>
                <td>
                    <input type="text" placeholder="">
                </td>
                <td>
                    <input type="text" placeholder="">
                </td>
                <td>
                    <input type="text" placeholder="">
                </td>
                <td>
                    <input type="text" placeholder="">
                </td>
                <td>
                    <input type="text" placeholder="">
                </td>
                <td>
                    <input type="text" placeholder="">
                </td>
                <td colspan="2">
                    <a type="" href="{{route('admin.stock.create')}}"><img src="/img/addst.svg" width="25px" height="25px" alt="edit"></a>
                </td>


            </tr>
        </table>
        <!-- 'productCode','productName','productScale','productVendor','productLine','productDescription','quantityInStock','buyPrice','MSRP' -->
        <div class="card md-4"></div>
        <table class="col-md-12 text-center" style="background-color:white;" id="myTR">
            <tr style="background-color:#3b444b; color:white;text-align:center">
                <th class="font-weight-light">productCode</th>
                <th class="font-weight-light">productName</th>
                <th class="font-weight-light">productLine</th>
                <th class="font-weight-light">productScale</th>
                <th class="font-weight-light">productVendor</th>
                <th class="font-weight-light">productDescription</th>
                <th class="font-weight-light">quantityInStock</th>
                <th class="font-weight-light">buyPrice</th>
                <th class="font-weight-light">MSRP</th>
                <th class="font-weight-light">edit/delete</th>
            </tr>
            @foreach($product as $data)
            <tr>
                
                <td class="font-weight-light">{{$data->productLine}}</td>
                <td class="font-weight-light">{{$data->productName}}</td>
                <td class="font-weight-light">{{$data->productLine}}</td>
                <td class="font-weight-light">{{$data->productScale}}</td>
                <td class="font-weight-light">{{$data->productVendor}}</td>
                <td class="font-weight-light">{{$data->productDescription}}</td>
                <td class="font-weight-light">{{$data->quantityInStock}}</td>
                <td class="font-weight-light">{{$data->buyPrice}}</td>
                <td class="font-weight-light">{{$data->MSRP}}</td>

                <td>
                    <div class="">
                        <a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a>
                        <a type="" href="#"><img src="/img/delete.png" width="30" height="30" alt="edit"></a>
                    </div>
                </td>
                @endforeach
            </tr>
        </table>

        

    </div>
    <footer>
        <!-- FOR CONTACT -->
        <hr>
        <br>
        <img src="/img/phone-book.svg" width="18px" ; height="18px"> CONTACT US<br>cpeg2DB@GMAIL.COM | TEL XXX-XXXXXXX
    </footer>
</div>


<!-- <script src="resources/js/searchengine.js"></script> -->
@endsection