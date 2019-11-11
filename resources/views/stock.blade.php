@extends('layouts.app')

@section('title')
  <title>Shopping | Stock</title>  
@endsection

@section('head')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('/css/stock.css')}}">
<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
=======
<link rel="stylesheet" href="/css/stock.css">
<style>
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>
@endsection

@section('content')
<!-- <div class="searchBox" align="center">

    <input class="searchInput" type="text" name="" placeholder="Search">
    <button class="searchButton" href="#">
        <i class="material-icons">
            <img src="/img/Search-512.png" alt="search" width="30px" height="30px">
        </i>
    </button>

</div> -->  
<h1 class="display-4 text-center mb-4 text-light">STOCK</h1>


<!-- make table resposive -->
<div class="table-responsive">   
    <div class="container">
        <div class="row row-centered pos">
            <div class="col-centered" style="margin-left:50px">
                <table class="table" style="background-color:white;" >

                    <tr style="background-color: black;color: white;text-align:center;">
                        <td>OrderDate</td>
                        <td>Amount</td>
                        <td>ProductCode</td>
                        <td>Name</td>
                        <td style="color:red" colspan="2">ADD</td>
                    </tr>
                    
                    <tr style="background-color:black;opacity:0.95;">
                        <div>
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
                            <center><a type="" href="#"><img src="/img/addst.svg" width="35" height="35" alt="edit"></a><center>
                            </td>
                        </div>
 
 

                    </tr>
                    </table>
                    <table class="table" style="background-color:white">
                    <tr style="background-color:black; color:white;text-align:center">
                        <th>OrderDate</th>
                        <th>Amount</th>
                        <th>ProductCode</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>
                        </td>

                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>
                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div>
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                            <center><a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                            <center><a type="" href="#"><img src="/img/delete.png" width="35" height="35" alt="edit"></a><center>
                            </div>

                        </td>
                        </table>
                 
            </div>


        </div>
    </div>
</div>


<!-- <script src="resources/js/searchengine.js"></script> -->
@endsection