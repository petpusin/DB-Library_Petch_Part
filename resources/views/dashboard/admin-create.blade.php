@extends('layouts.app')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

@section('content')
@if($employee->employeeNumber == Auth::user()->em_id && $employee->jobTitle != "VP Marketing")
<div class="container">
    <div class="row">
        <div class="card-header font-weight-light" style="background-color:rgba(0,0,0, 0.8); border-radius:5px;margin-top:10px; margin-bottom:20px">
            Create
        </div>
        <div class="col-md-12">




            <div class="row" style="background-color:white;padding:60px">

                <div class="col-md-12">
                    <tr>
                        <td>
                            <center><font size="5">Report to : {{$employee->firstName}} {{$employee->lastName}}</font></center>
                        </td>
                        
                        <!-- <td>
                            <font class="font-weight-light" style="margin-left:30px">{{$employee->lastName}}</font>
                        </td> -->
                    </tr>
                    <form action="update/CreateUpdate/{{$employee->emploueeNumber}}" style="display:block" method="post">
                        {{ method_field('put') }}
                        {{ csrf_field() }}

                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Employee Number</center>
                            </td>
                            <td>
                                <center><input type="number" name="employeeNumber" required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">First Name</center>
                            </td>
                            <td>
                                <center><input type="text" name="firstName" required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Last Name</center>
                            </td>
                            <td>
                                <center><input type="text" name="lastName" required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Extension</center>
                            </td>
                            <td>
                                <center><input type="text" name="extension" required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Email</center>
                            </td>
                            <td>
                                <center><input type="email" name="email" required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Report to</center>
                            </td>
                            <td>
                                <center><select name="reportsTo" id="reportsTo">
                                        <option value={{$employee->employeeNumber}}>{{$employee->employeeNumber}}</option>
                                    </select>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Job Title</center>
                            </td>
                            <td>
                                <center>
                                    @if($employee->jobTitle == "President")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="VP Sales">VP Sales</option>
                                        <option value="VP Marketing">VP Marketing</option>
                                        <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                                        <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
                                        <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                                        <option value="Sales Rep">Sales Rep</option>
                                    </select>
                                    @elseif($employee->jobTitle == "VP Sales")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                                        <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
                                        <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                                    </select>
                                    @elseif($employee->jobTitle == "Sales Manager (APAC)" || $employee->jobTitle == "Sale Manager (EMEA)" || $employee->jobTitle == "Sales Manager (NA)")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="Sales Rep">Sales Rep</option>
                                    </select>
                                    @endif
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Office Code</center>
                            </td>
                            <td>
                                <center>
                                <select name="officeCode">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                                </center>
                            </td>
                        </tr>
                            <div style="margin-top:30px">
                                <center><input type="submit" class="btn" onclick="success()" value="Save" style="background-color:black;color:chartreuse;margin:10px"><a href="/admin/dashboard" class="">Cancel</a></div></center>
                            </div>
                    </form>

                </div>
            </div>


        </div>
    </div>

</div>
@else
<br><br><br>
<center><font size="50" color="white">404 | Not Found </font></center>
@endif
@endsection

@section('script')

@endsection