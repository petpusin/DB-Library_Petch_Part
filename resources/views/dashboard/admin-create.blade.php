@extends('create.master')

@section('css')
<link rel="stylesheet" href="/css/ermCreate.css">
@endsection

@section('content')
@if($employee->employeeNumber == Auth::user()->em_id && $employee->jobTitle != "VP Marketing")
<div class="container">
<div class="for-emp-contain">
            <a href="#" id="responClicked"><img src="https://image.flaticon.com/icons/svg/60/60510.svg" alt=""></a>
        </div>

        <div class="for-emp-respon">
            <div class="for-emp-respon-grid" id="respon-menu">
            <a href="#"><img src="/img/employee.svg" alt="">Employee Resource
                    Management</a>
                <a href="#"><img src="/img/factory-stock-house.svg" alt="">Stock</a>
                <a href="#"><img src="/img/order.svg" alt="">Order</a>
                <a href="#"><img src="/img/clipboard.svg" alt="">Register</a>
                <a href="#"><img src="/img/customers.svg" alt="">Customer</a>
            </div>

        </div>

        <div class="create-box">
            <form action="update/CreateUpdate/{{$employee->emploueeNumber}}" style="display:block" method="post">
                {{ method_field('put') }}
                {{ csrf_field() }}
            <div class="create-header">create</div>
            <div class="contain-grid-create">
                <div class="a-side-create">
                    <div class="div-inline title-cr">Report to : </div>
                    <div class="div-inline ans-cr">{{$employee->firstName}} {{$employee->lastName}}</div>
                </div>
                <div class="b-side-create">
                    <div>
                        <p>Employee Number</p><input type="number" name="employeeNumber" required>
                    </div>
                    <div>
                        <p>First name</p><input type="text" name="firstName" required>
                    </div>
                    <div>
                        <p>Last name</p><input type="text" name="lastName" required>
                    </div>
                    <div>
                        <p>Extension</p><input type="text" name="extension" required>
                    </div>
                    <div>
                        <p>Email</p><input type="email" name="email" required>
                    </div>
                </div>
            </div>
            <div class="contain-grid-create">
                <div class="a-side-create">
                    <div class="div-inline title-cr">Select</div>
                </div>
                <div class="b-side-create">
                    <div>
                        <p>Report to</p><select name="reportsTo" id="reportsTo">
                            <option value={{$employee->employeeNumber}}>{{$employee->employeeNumber}}</option>
                        </select>
                    </div>

                    <div>
                        <p>Job</p>
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
                    </div>

                    <div>
                        <p>Office code</p><select name="officeCode" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="create-btn"><button  onclick="success()" value="Save" ><a href="/admin/dashboard" class=""></a>Create</button></div>
            </form>
        </div>

        <div class="back-to-basic"><a class="back-button" href="javascript:history.back()"><img id="back-button"
                    src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>

</div>
@else
<br><br><br>
<center><font size="50" color="white">404 | Not Found </font></center>
@endif
@endsection

@section('script')

@endsection