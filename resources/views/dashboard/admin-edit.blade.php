@extends('layouts.app')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row">
        <div class="card-header font-weight-light" style="background-color:rgba(0,0,0, 0.8); border-radius:5px;margin-top:10px; margin-bottom:20px">
            Edit Job Employee
        </div>
        <div class="col-md-12">
            
             
 
                 
                    <div class="row" style="background-color:white;padding:60px">
                        
                        <div class="col-md-12">
                            <tr>
                                <td>
                                    <label class="font-weight-normal" style="margin-bottom:20px ;font-size:24px">Lastname</label>
                                </td>
                                <td >                                        
                                    <font class="font-weight-light" style="margin-left:30px">{{$employee->lastName}}</font>
                                </td>
                            </tr>
                            <form action="/admin/employee/edit-update/{{$employee->employeeNumber}}" method="POST">
                                {{ method_field('put') }}
                                {{ csrf_field() }}
                                
                                <div class="form-group">
  
                                    <label class="font-weight-normal" style="font-size:24px">Job</label>
                                        <select name="jobTitle" id="jobTitle" style="margin-left:90px">
                                            <option value="President">President</option>
                                            <option value="VP Sales">VP Sales</option>
                                            <option value="VP Marketing">VP Marketing</option>
                                            <option value="Sales Manager_(APAC)">Sales Manager (APAC)</option>
                                            <option value="Sale Manager_(EMEA)">Sale Manager (EMEA)</option>
                                            <option value="Sales Manager_(NA)">Sales Manager (NA)</option>
                                            <option value="Sales Rep">Sales Rep</option>
                                        </select>
                                    
                                </div>
                                <div class="text-center"><button type="submit" class="" style="background-color:black;color:chartreuse;border-radius:5px;border:none;padding:8px;margin:5px"> Update </button>
                                <a href="/admin/dashboard" class="">Cancel</a></div>
                            </form>
                            
                        </div>
                    </div>
                 
             
        </div>
    </div>
    
</div>

@endsection

@section('script')

@endsection