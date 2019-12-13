@extends('create.master')

@section('title')
Shopping | ERM
@endsection
@section('css')
<link rel="stylesheet" href="/css/erm.css">

@endsection



@section('content')

<?php $aaa = 0 ?>
@foreach($employees as $temp)
@if($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "President")
<?php $aaa = 1 ?>
@elseif($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "VP Sales")
<?php $aaa = 2 ?>
@elseif($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "Sales Manager (APAC)")
<?php $aaa = 4 ?>
@elseif($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "Sales Manager (EMEA)")
<?php $aaa = 4 ?>
@elseif($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "Sales Manager (NA)")
<?php $aaa = 4 ?>
@elseif($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "VP Marketing")
<?php $aaa = 3 ?>
@elseif($temp->employeeNumber == Auth::user()->em_id && $temp->jobTitle == "Sales Rep")
<?php $aaa = 5 ?>
@endif
@endforeach

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
    <?php $bbb = 0 ?>
    @foreach ($employees as $d)
    <div class="grid-contain-dbs-erm">
    
        @if($d->jobTitle == "President")
        <?php $bbb = 1 ?>
        @elseif($d->jobTitle == "VP Sales")
        <?php $bbb = 2 ?>
        @elseif($d->jobTitle == "Sales Manager (APAC)")
        <?php $bbb = 4 ?>
        @elseif($d->jobTitle == "Sales Manager (EMEA)")
        <?php $bbb = 4 ?>
        @elseif($d->jobTitle == "Sales Manager (NA)")
        <?php $bbb = 4 ?>
        @elseif($d->jobTitle == "VP Marketing")
        <?php $bbb = 3 ?>
        @elseif($d->jobTitle == "Sales Rep")
        <?php $bbb = 5 ?>
        @endif
        <div>{{$d->employeeNumber }}</div>
        <div>{{ $d->firstName}}</div>
        <div>{{ $d->lastName}}</div>
        <div>{{ $d->extension}}</div>
        <div>{{ $d->email}}</div>
        <div>{{ $d->officeCode}}</div>
        <div>{{ $d->reportsTo}}</div>
        <div>{{ $d->jobTitle}}</div>
        @if($aaa == 1)
        <div id="edit-erm"><a href="/admin/employee/edit/{{$d->employeeNumber}}">Edit</a></div>
        @if($d->employeeNumber == Auth::user()->em_id)
        <td></td>
        @else
        <div id="delete-erm"><a href="/admin/employee/delete/{{$d->employeeNumber}}">Delete</a></div>
        @endif

        @else
        @if($d->reportsTo != Auth::user()->em_id && $d->employeeNumber != Auth::user()->em_id || $bbb <= $aaa )
        <td></td>
        @elseif($d->employeeNumber == Auth::user()->em_id)
        <div id="edit-erm"><a href="/admin/employee/edit/{{$d->employeeNumber}}">Edit</a></div>
        @else
        <div id="edit-erm"><a href="/admin/employee/edit/{{$d->employeeNumber}}">Edit</a></div>
        @endif
        @if($d->employeeNumber == Auth::user()->em_id || $d->reportsTo != Auth::user()->em_id || $bbb <= $aaa )
        <td></td>
        @else
        <div id="delete-erm"><a href="/admin/employee/delete/{{$d->employeeNumber}}">Delete</a></div>
        @endif
        @endif
    </div>
    @endforeach

    <div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>
</div>
</div>


@endsection

@section('script')
<script src="/js/indexscpt.js"></script>
@endsection