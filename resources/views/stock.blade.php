@extends('layouts.app')
<!-- CSS-style -->


<link rel="stylesheet" href="/css/stock.css">

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
<div class="container">
    <table style="width:100%">
        <tr style="background-color:black; color:white">
            <th style="text-align:center">OrderDate</th>
            <th style="text-align:center">Amount</th>
            <th style="text-align:center">ProductCode</th>
            <th style="text-align:center">Name</th>
            <th style="text-align:center">Edit</th>
            <th style="text-align:center">Delete</th>
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
        </tr>

        <tr>
            <td>OrderDate</td>
            <td>Amount</td>
            <td>ProductCode</td>
            <td>Name</td>
            <td style="color:red" colspan="2">Add</td>
        </tr>

        <tr>
            <div class="topnav">
                <td style="background-color:#ddd">
                    <input type="text" placeholder="" class="general-search">
                </td>
                <td style="background-color:#ddd">
                    <input type="text" placeholder="" class="general-search">
                </td>
                <td style="background-color:#ddd">
                    <input type="text" placeholder="" class="general-search">
                </td>
                <td style="background-color:#ddd">
                    <input type="text" placeholder="" class="general-search">
                </td>
                <td style="background-color:#ddd" colspan="2">
                    <div class="box3">
                        <img src="/img/add.png" alt="" class="center">
                    </div>
                </td>
            </div>


        </tr>
    </table>


</div>






<script src="resources/js/searchengine.js"></script>
@endsection