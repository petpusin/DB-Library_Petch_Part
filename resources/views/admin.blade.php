@extends('layouts.app')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ADMIN Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="panel-body">
                    You are login, Admin
                </div>
                @foreach ($data as $d)
                <table>
                <div>
                    <tr>
                        <th>EmployeeNumber-></th>
                        <th>{{$d->employeeNumber }}</th></tr>
                    <tr> <th>Lastname-></th>
                        <th>{{ $d->lastName}}</th></tr>
                    <tr>   <th>FirstName-></th>
                        <th>{{ $d->firstName}}</th></tr>
                    <tr>    <th>extension-></th>
                        <th>{{ $d->extension}}</th></tr>
                    <tr> <th>email-></th>
                        <th>{{ $d->email}}</th></tr>
                    <tr>    <th>officeCode-></th>
                        <th>{{ $d->officeCode}}</th></tr>
                    <tr>    <th>reportsTo-></th>
                        <th>{{ $d->reportsTo}}</th></tr>
                    <tr>    <th>jobTitle-></th>
                        <th>{{ $d->jobTitle}}</th></tr>
                
                </div>
                
                </table>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div style="text-align: center;">
<button type="button" style="position: absolute;margin:auto;
    top: 50%;" class="btn btn-success"><a href="{{ url('/') }}">Home</button></div>
@endsection
