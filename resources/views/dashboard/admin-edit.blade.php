@extends('layouts.app')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Role Employee
                </div>
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col-md-6">
                            <tr>
                                <td>
                                    <label >Lastname:  </label>
                                </td>
                                <td>                                        
                                    {{$employee->lastName}}        
                                </td>
                            </tr>
                            <form action="/admin/employee/edit-update/{{$employee->employeeNumber}}" method="POST">
                                {{ method_field('put') }}
                                {{ csrf_field() }}
                                
                                <div class="form-group">
                                    <label >Give Role</label>
                                        <select name="jobTitle" id="jobTitle">
                                            <option value="President">President</option>
                                            <option value="VP Sales">VP Sales</option>
                                            <option value="VP Marketing">VP Marketing</option>
                                            <option value="Sales Manager_(APAC)">Sales Manager (APAC)</option>
                                            <option value="Sale Manager_(EMEA)">Sale Manager (EMEA)</option>
                                            <option value="Sales Manager_(NA)">Sales Manager (NA)</option>
                                            <option value="Sales Rep">Sales Rep</option>
                                        </select>
                                    
                                </div>
                                <button type="submit" class="btn btn-success"> Update </button>
                                <a href="/admin/dashboard" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection