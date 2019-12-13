@extends('create.master')
@section('css')
<link rel="stylesheet" href="/css/shopdetail.css">
@endsection
@section('content')
<?php $aaa = 0 ?>
@foreach($employee as $temp)
@if($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "VP Sales")
<?php $aaa = 1 ?>
@elseif($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "President")
<?php $aaa = 2 ?>
@elseif($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "Sales Manager (APAC)")
<?php $aaa = 3 ?>
@elseif($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "Sales Manager (EMEA)")
<?php $aaa = 3 ?>
@elseif($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "Sales Manager (NA)")
<?php $aaa = 3 ?>
@endif
@endforeach
@if($employee->reportsTo == Auth::user()->em_id || $aaa == 2 || $employee->employeeNumber == Auth::user()->em_id)
<div class="container">
    <div class="row">
        <div class="card-header font-weight-light" style="background-color:rgba(0,0,0, 0.8); border-radius:5px;margin-top:10px; margin-bottom:20px">
            Edit
        </div>
        <div class="col-md-12">




            <div class="row" style="background-color:white;padding:60px">

                <div class="col-md-12">
                    <form action="/admin/employee/edit-update/{{$employee->employeeNumber}}" method="POST">
                        {{ method_field('put') }}
                        {{ csrf_field() }}
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">FirstName</center>
                            </td>
                            <td>
                                <center><input type="txt" name="firstName" value={{$employee->firstName}} required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">LastName</center>
                            </td>
                            <td>
                                <center><input type="txt" name="lastName" value={{$employee->lastName}} required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Extension</center>
                            </td>
                            <td>
                                <center><input type="text" name="extension" value={{$employee->extension}} required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Email</center>
                            </td>
                            <td>
                                <center><input type="email" name="email" value={{$employee->email}} required></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Office Code</center>
                            </td>
                            <td><center>
                                @if($employee->employeeNumber == Auth::user()->em_id &&  $aaa != 2)
                                    <select name="officeCode" id="officeCode">
                                        <option value={{$employee->officeCode}}>{{$employee->officeCode}}</option>
                                    </select>
                                @else
                                @if($employee->officeCode == 1)
                                    <select name="officeCode" id="officeCode">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                @elseif($employee->officeCode == 2)
                                <select name="officeCode" id="officeCode">
                                        <option value="1">1</option>
                                        <option value="2" selected>2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                @elseif($employee->officeCode == 3)
                                <select name="officeCode" id="officeCode">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3" selected>3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                @elseif($employee->officeCode == 4)
                                <select name="officeCode" id="officeCode">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected>4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                @elseif($employee->officeCode == 5)
                                <select name="officeCode" id="officeCode">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5" selected>5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                @elseif($employee->officeCode == 6)
                                <select name="officeCode" id="officeCode">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6" selected>6</option>
                                        <option value="7">7</option>
                                    </select>
                                @elseif($employee->officeCode == 7)
                                <select name="officeCode" id="officeCode">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7" selected>7</option>
                                    </select>
                                @endif
                                @endif
                            </center>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: black ; color: white ; width:10% ; height:50px">
                                <center class="font-weight-light">Job Title</center>
                            </td>
                            <td>
                                <center>
                                    @if($employee->employeeNumber == Auth::user()->em_id)
                                    <select name="jobTitle" id="jobTitle">
                                        <option value={{$employee->jobTitle}}>{{$employee->jobTitle}}</option>
                                    </select>
                                    @elseif($aaa == 2)
                                    @if($employee->jobTitle == "VP Sales")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="VP Sales" selected>VP Sales</option>
                                        <option value="VP Marketing">VP Marketing</option>
                                        <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                                        <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
                                        <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                                        <option value="Sales Rep">Sales Rep</option>
                                    </select>
                                    @elseif($employee->jobTitle == "VP Marketing")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="VP Sales">VP Sales</option>
                                        <option value="VP Marketing" selected>VP Marketing</option>
                                        <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                                        <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
                                        <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                                        <option value="Sales Rep">Sales Rep</option>
                                    </select>
                                    @elseif($employee->jobTitle == "Sales Manager (APAC)")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="VP Sales">VP Sales</option>
                                        <option value="VP Marketing">VP Marketing</option>
                                        <option value="Sales Manager (APAC) selected">Sales Manager (APAC)</option>
                                        <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
                                        <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                                        <option value="Sales Rep">Sales Rep</option>
                                    </select>
                                    @elseif($employee->jobTitle == "Sale Manager (EMEA)")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="VP Sales">VP Sales</option>
                                        <option value="VP Marketing">VP Marketing</option>
                                        <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                                        <option value="Sale Manager (EMEA)" selected>Sale Manager (EMEA)</option>
                                        <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                                        <option value="Sales Rep">Sales Rep</option>
                                    </select>
                                    @elseif($employee->jobTitle == "Sales Manager (NA)")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="VP Sales">VP Sales</option>
                                        <option value="VP Marketing">VP Marketing</option>
                                        <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                                        <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
                                        <option value="Sales Manager (NA)" selected>Sales Manager (NA)</option>
                                        <option value="Sales Rep">Sales Rep</option>
                                    </select>
                                    @elseif($employee->jobTitle == "Sales Rep")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="VP Sales">VP Sales</option>
                                        <option value="VP Marketing">VP Marketing</option>
                                        <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                                        <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
                                        <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                                        <option value="Sales Rep" selected>Sales Rep</option>
                                    </select>
                                    @endif
                                    @elseif($aaa == 1 && $employee->jobTitle != "President" && $employee->jobTitle != "VP Sales")
                                    @if($employee->jobTitle == "Sales Manager (APAC)")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="Sales Manager (APAC)" selected>Sales Manager (APAC)</option>
                                        <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
                                        <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                                        <option value="Sales Rep">Sales Rep</option>
                                    </select>
                                    @elseif($employee->jobTitle == "Sale Manager (EMEA)")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                                        <option value="Sale Manager (EMEA)" selected>Sale Manager (EMEA)</option>
                                        <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                                        <option value="Sales Rep">Sales Rep</option>
                                    </select>
                                    @elseif($employee->jobTitle == "Sales Manager (NA)")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                                        <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
                                        <option value="Sales Manager (NA)" selected>Sales Manager (NA)</option>
                                        <option value="Sales Rep">Sales Rep</option>
                                    </select>
                                    @endif
                                    @elseif($aaa == 3  && $employee->jobTitle != "Sales Manager (APAC)" && $employee->jobTitle != "Sales Manager (EMEA)" && $employee->jobTitle != "Sales Manager (NA)" && $employee->jobTitle != "President" && $employee->jobTitle != "VP Sales")
                                    <select name="jobTitle" id="jobTitle">
                                        <option value="Sales Rep" selected>Sales Rep</option>
                                    </select>
                                    @else
                                    <select name="jobTitle" id="jobTitle">
                                        <option value={{$employee->jobTitle}}>{{$employee->jobTitle}}</option>
                                    </select>
                                    @endif</center>
                            </td>
                        </tr><br>
                        <div class="text-center"><input type="submit" class="btn" onclick="success()" value="Update" style="background-color:black;color:chartreuse;margin:10px"><a href="/admin/dashboard" class="">Cancel</a></div>
                    </form>

                </div>
            </div>


        </div>
    </div>

</div>
@else
<br><br><br>
<center>
    <font size="50" color="white">404 | Not Found </font>
</center>
@endif
@endsection

@section('script')

@endsection