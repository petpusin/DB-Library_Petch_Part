@extends('create.master')

@section('title')
Shopping | ERM
@endsection
@section('header')


@endsection
@section('content')

<div class="container">
    <div class="for-emp-contain">
        <a href="#" id="responClicked"><img src="https://image.flaticon.com/icons/svg/60/60510.svg" alt=""></a>
    </div>

    <div class="for-emp-respon">
        <div class="for-emp-respon-grid" id="respon-menu">
            <a href="#"><img src="https://image.flaticon.com/icons/svg/1319/1319495.svg" alt="">Employee Resource
                Management</a>
            <a href="#"><img src="https://www.flaticon.com/premium-icon/icons/svg/1009/1009874.svg" alt="">Stock</a>
            <a href="#"><img src="https://image.flaticon.com/icons/svg/1252/1252355.svg" alt="">Order</a>
        </div>

    </div>
    <div class="grid-for-ermheader">Employee Resource Manager
    </div>

    <div class="grid-contain-head-erm">
        <div>Employee No.</div>
        <div>First Name</div>
        <div>Last Name</div>
        <div>Extension</div>
        <div>Email</div>
        <div>Official Code</div>
        <div>Reports To</div>
        <div>Job</div>
        <div>Tools</div>
    </div>

    @foreach ($employees as $d)
    <div class="grid-contain-dbs-erm">
       
        <div>{{$d->employeeNumber }}</div>
        <div>{{ $d->firstName}}</div>
        <div>{{ $d->lastName}}</div>
        <div>{{ $d->extension}}</div>
        <div>{{ $d->email}}</div>
        <div>{{ $d->officeCode}}</div>
        <div>{{ $d->reportsTo}}</div>
        <div>{{ $d->jobTitle}}</div>
        <div id="edit-erm"><a href="/admin/employee/edit/{{$d->employeeNumber}}">Edit</a></div>
        <div id="delete-erm"><a href="/admin/employee/detele/{{$d->employeeNumber}}">Delete</a></div>
        
    </div>
    @endforeach

    <div class="back-to-basic"><a class="back-button" href="#"><img id="back-button"
                    src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="#"><img id="home-button" src="/img/home.svg" alt=""></a></div>
    </div>
</div>


@endsection

@section('script')
<script src="/js/indexscpt.js"></script>
@endsection