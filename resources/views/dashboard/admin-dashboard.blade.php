@extends('layouts.app')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">


@section('title')
Shopping | ERM
@endsection

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">Employee Resource Management</div>

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
                                <font size="1px">Employee No.</font>
                                </center>
                            </th>
                            <th>
                                <center>
                                <font width="10%" size="2px">FirstName</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font width="10%" size="2px">LastName</font>
                                </center>
                            </th>
                            <th>
                                <center>
                                <font width="10%" size="2px">Extension</font>
                                </center>
                            </th>
                            <th width="5%">
                                <center>
                                <font size="2px" >Email Address</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font size="2px">Office Code</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font size="2px">Reports To</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font size="2px">Job Title</font>
                                </center>
                            </th>
                            <th width="5%">
                                <center>
                                <font size="3px"></font>
                                </center>
                            </th><th width="5%">
                                <center>
                                <font size="3px"></font>
                                </center>
                            </th>
                        </tr>
                    
                        @foreach ($employees as $d)
                        <tr>
                        <td>
                            <center> {{$d->employeeNumber }}</center>
                        </td>
                        <td style="font-weight: bold;">   
                            <center>{{ $d->firstName}}</center>
                        </td>
                        <td style="font-weight: bold;"> 
                            <center>{{ $d->lastName}}</center>
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
                        <td style="font-size:12px;font-weight:bold; color:green">    
                            <center>{{ $d->jobTitle}}</center>
                        </td>
                        <td>
                            <a href="/admin/employee/edit/{{$d->employeeNumber}}"><img src="/img/pencil.svg" alt="" width="30px"  height="30px"></a>
                        </td>
                        <td>
                            <a href="/admin/employee/detele/{{$d->employeeNumber}}"><img src="/img/delete.svg" alt="" width="30px" height="30px"></a>
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
