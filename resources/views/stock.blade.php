@extends('layouts.app')

@section('title')
  Shopping | Stock
@endsection

@section('head')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('/css/stock.css')}}">
<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/stock.css">
<style>

  tr:nth-child(odd) {
    background-color: #f2f2f2;
    }

    footer {
    font-size: 10px;
    font-weight: lighter;
    color: white;
    text-align: center;
    position: relative;
    margin-top: 40px;
    }

    hr{
      background-color:white;
      height:0.5px;
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
    <div class="container text-center">
 
                <table class="col-md-12" style="margin-bottom:50px;">

                    <tr class="text-weight-light text-center" style="background-color: black;color: white;">
                        <th class="font-weight-light">Order Date</th>
                        <th class="font-weight-light">Amount</th>
                        <th class="font-weight-light">Product Code</th>
                        <th class="font-weight-light">Name</th>
                        <th class="font-weight-light" style="color:red">ADD</th>
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
                            <td colspan="2">
                            <a type="" href="#"><img src="/img/addst.svg" width="25px" height="25px" alt="edit"></a>
                            </td>
 

                    </tr>
                    </table>

                    <table class="col-md-12 text-center" style="background-color:white;">
                    <tr style="background-color:#3b444b; color:white;text-align:center">
                        <th class="font-weight-light">Order Date</th>
                        <th class="font-weight-light">Amount</th>
                        <th class="font-weight-light">Product Code</th>
                        <th class="font-weight-light">First Name</th>
                        <th class="font-weight-light">Last Name</th>
                        <th class="font-weight-light">Tools</th>
                    </tr>
                    <tr>
                        <td class="font-weight-light">xx/xx/xxxx</td>
                        <td class="font-weight-light">xx</td>
                        <td class="font-weight-light">xxxxx</td>
                        <td class="font-weight-light">xxxxxxxxx</td>
                        <td class="font-weight-light">xxxxxxxx</td>
                        <td>
                            <div class="">
                            <a type="" href="#"><img src="/img/pencil.svg" width="35" height="35" alt="edit"></a>
                            <a type="" href="#"><img src="/img/delete.png" width="30" height="30" alt="edit"></a>
                            </div>
                        </td>
              
                        </table>
                 
    </div>
    <footer>      <!-- FOR CONTACT -->
  <hr>
  <br>
      <img src="/img/phone-book.svg" width="18px"; height="18px"> CONTACT US<br>cpeg2DB@GMAIL.COM | TEL XXX-XXXXXXX
  </footer>
</div>


<!-- <script src="resources/js/searchengine.js"></script> -->
@endsection