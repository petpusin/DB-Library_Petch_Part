@extends('layouts.app')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
        
            </div>
        </div>
    </div>
</div>
<div style="text-align: center;">
<button type="button" style="position: absolute;margin:auto;
    top: 50%;" class="btn btn-success"><a href="{{ url('/') }}">Home</button></div>
@endsection
