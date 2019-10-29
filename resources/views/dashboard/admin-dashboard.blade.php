@extends('layouts.app')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">ADMIN Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                <div class="card my-4">
                    <table id="myTR">
                        <tr style="background-color: black;color: white;">
                            <th height="60">
                                <center>
                                <font size="3">EmployeeNumber</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font width="10%">lastName</font>
                                </center>
                            </th>
                            <th>
                                <center>
                                <font width="10%">firstName</font>
                                </center>
                            </th>
                            <th>
                                <center>
                                <font width="10%">extension</font>
                                </center>
                            </th>
                            <th width="5%">
                                <center>
                                <font size="3">email</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font size="3">officeCode</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font size="3">reportsTo</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font size="3">jobTitle</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font size="3">Edit</font>
                                </center>
                            </th><th width="10%">
                                <center>
                                <font size="3">Delete</font>
                                </center>
                            </th>
                        </tr>
                    
                        @foreach ($employees as $d)
                        <tr>
                        <td>
                            <center> {{$d->employeeNumber }}</center>
                        </td>
                        <td> 
                            <center>{{ $d->lastName}}</center>
                        </td>
                        <td>   
                            <center>{{ $d->firstName}}</center>
                        </td>
                        <td>    
                            <center>{{ $d->extension}}</center>
                        </td>
                        <td>
                            <center>{{ $d->email}}</center>
                        </td>
                        <td>    
                            <center>{{ $d->officeCode}}</center>
                        </td>
                        <td>    
                            <center>{{ $d->reportsTo}}</center>
                        </td>
                        <td>    
                            <center>{{ $d->jobTitle}}</center>
                        </td>
                        <td>
                            <a href="/admin/employee/edit/{{$d->employeeNumber}}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                            <a href="/admin/employee/detele/{{$d->employeeNumber}}" class="btn btn-danger">DELETE</a>
                        </td>
                    
                
                    </tr>
                    @endforeach
                    </table><br>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
