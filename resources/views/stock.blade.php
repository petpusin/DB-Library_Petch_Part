@extends('layouts.app')
<!-- CSS-style -->
@section('head')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">
<link rel="stylesheet" href="/css/stock.css">
<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="searchBox" align="center">

    <input class="searchInput" type="text" name="" placeholder="Search">
    <button class="searchButton" href="#">
        <i class="material-icons">
            <img src="/img/Search-512.png" alt="search" width="30px" height="30px">
        </i>
    </button>
</div>
<br><br>

<!-- make table resposive -->
<div class="table-responsive">   
    <div class="container">
        <div class="row row-centered pos">
            <div class="col-lg-8 col-centered">
                <table class="table table-hover">
                    <tr style="background-color:black; color:white" class="Headtable">
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
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>
                    <tr>
                        <td>27/10/2019</td>
                        <td>123</td>
                        <td>ABC</td>
                        <td>Nice</td>

                        <td>
                            <div class="box">
                                <img src="/img/edit.png" alt="" class="center">
                            </div>

                        </td>


                        <td>
                            <div class="box2">
                                <img src="/img/delete.png" alt="" class="center">
                            </div>

                        </td>


                    <tr>
                        <td>OrderDate</td>
                        <td>Amount</td>
                        <td>ProductCode</td>
                        <td>Name</td>
                        <td style="color:red" colspan="2">Add</td>
                    </tr>

                    <tr>
                        <div class="topnav">
                            <td>
                                <input type="text" placeholder="" class="general-search">
                            </td>
                            <td>
                                <input type="text" placeholder="" class="general-search">
                            </td>
                            <td>
                                <input type="text" placeholder="" class="general-search">
                            </td>
                            <td>
                                <input type="text" placeholder="" class="general-search">
                            </td>
                            <td colspan="2">
                                <div class="box3">
                                    <img src="/img/add.png" alt="" class="center">
                                </div>
                            </td>
                        </div>


                    </tr>
                </table>
            </div>


        </div>
    </div>
</div>






<!-- <script src="resources/js/searchengine.js"></script> -->
@endsection