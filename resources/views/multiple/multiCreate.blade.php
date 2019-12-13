@extends('create.master')

@section('css')

<link rel="stylesheet" href="/css/payment.css">

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="card-header font-weight-light" style="background-color:rgba(0,0,0, 0.8); border-radius:5px;margin-top:10px; margin-bottom:20px">
            Create new address
        </div>
        <div class="col-md-12">




            <div class="row" style="background-color:white;padding:60px">

                <div class="col-md-12">
                    <form action="/admin/multiple/create/update" style="display:block" method="post">
                        {{ method_field('put') }}
                        {{ csrf_field() }}

                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Customer Number</center>
                            </td>
                            <td>
                                <center><input type="number" name="customerNumber" required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">addressLine1</center>
                            </td>
                            <td>
                                <center><textarea rows="3" cols="60" name="addressLine1" required></textarea></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">addressLine2</center>
                            </td>
                            <td>
                                <center><textarea rows="3" cols="60" name="addressLine2"></textarea></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">city</center>
                            </td>
                            <td>
                                <center><input type="text" name="city" required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">state</center>
                            </td>
                            <td>
                                <center><input type="text" name="state"></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">postalCode</center>
                            </td>
                            <td>
                                <center><input type="text" name="postalCode"></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">country</center>
                            </td>
                            <td>
                                <center><input type="text" name="country" required></center>
                            </td>

                        </tr>
                        <div style="margin-top:30px">
                            <center><input type="submit" class="btn" onclick="success()" value="Save" style="background-color:black;color:chartreuse;margin:10px"><a href="/admin/dashboard" class="">Cancel</a>
                        </div>
                        </center>
                </div>
                </form>

            </div>
        </div>


    </div>
</div>
<div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>
    </div>
</div>
@endsection

@section('script')

@endsection