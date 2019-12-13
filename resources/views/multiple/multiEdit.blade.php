@extends('create.master')

@section('css')

<link href="{{ asset('css/signin.css')}}" rel="stylesheet">
<link rel="stylesheet" href="/css/shopdetail.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card-header font-weight-light" style="background-color:rgba(0,0,0, 0.8); border-radius:5px;margin-top:10px; margin-bottom:20px">
            Edit Address
        </div>
        <div class="col-md-12">
            <div class="row" style="background-color:white;padding:60px">
           
                <div class="col-md-12">
                    <form action="/admin/multiple/edit_/{{$aaa->id}}" method="POST" style="display: block">
                        {{ method_field('put') }}
                        {{ csrf_field() }}
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">addressLine1</center>
                            </td>
                            <td>
                                <center><textarea rows="3" cols="60" name="addressLine1" required>{{$aaa->addressLine1}}</textarea></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">addressLine2</center>
                            </td>
                            <td>
                                <center><textarea rows="3" cols="60" name="addressLine2">{{$aaa->addressLine2}}</textarea></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">city</center>
                            </td>
                            <td>
                                <center><input type="text" name="city" value={{$aaa->city}} required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">state</center>
                            </td>
                            <td>
                                <center><input type="text" name="state" value={{$aaa->state}}></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">postalCode</center>
                            </td>
                            <td>
                                <center><input type="text" name="postalCode" value={{$aaa->postalCode}}></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">country</center>
                            </td>
                            <td>
                                <center><input type="text" name="country" value={{$aaa->country}} required></center>
                            </td>
                            
                        </tr><br>
                        <div class="text-center"><input type="submit" class="btn" onclick="success()" value="Update" style="background-color:black;color:chartreuse;margin:10px"><a href="/admin/multiple" class="">Cancel</a></div>
                    </form>

                </div>
            </div>


        </div>
    </div>

</div>
@endsection

@section('script')

@endsection