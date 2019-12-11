@extends('create.master')

@section('title')
Shopping | ERM
@endsection
@section('css')
<link rel="stylesheet" href="/css/erm.css">
    
@endsection


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
    @foreach ($employees as $d)
                @if($d->employeeNumber == Auth::user()->em_id && $d->jobTitle != "VP Marketing")
                    <center><button onclick="location.href='{{route('admin.create',['id'=> Auth::user()->em_id])}}' " type="button" class="btn btn-info">Create new employee</button></center>
                @endif
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
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
        @if(Auth::user()->em_id == 1002)
        <div id="edit-erm"><a href="/admin/employee/edit/{{$d->employeeNumber}}">Edit</a></div>
        @if($d->employeeNumber == Auth::user()->em_id)
        <td></td>
        @else
        <div id="delete-erm"><a href="/admin/employee/delete/{{$d->employeeNumber}}">Delete</a></div>
        @endif

        @else
        @if($d->reportsTo != Auth::user()->em_id && $d->employeeNumber != Auth::user()->em_id)
        <td></td>
        @elseif($d->employeeNumber == Auth::user()->em_id)
        <div id="edit-erm"><a href="/admin/employee/edit/{{$d->employeeNumber}}">Edit</a></div>
        @else
        <div id="edit-erm"><a href="/admin/employee/edit/{{$d->employeeNumber}}">Edit</a></div>
        @endif
        @if($d->employeeNumber == Auth::user()->em_id || $d->reportsTo != Auth::user()->em_id)
        <td></td>
        @else
        <div id="delete-erm"><a href="/admin/employee/delete/{{$d->employeeNumber}}">Delete</a></div>
        @endif
        @endif
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
