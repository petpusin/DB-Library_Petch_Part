@extends('create.master')

@section('title')
Shopping | Stock
@endsection
@section('css')
<link rel="stylesheet" href="/css/stock.css">
@endsection



@section('content')

<h1 class="display-4 text-center mb-4 text-light">Coupon</h1>
<div class="coupon-section">

    <form action="{{route('admin.coupon.store2')}}" style="display:block" method="POST" id="payment-form">
    {{ csrf_field() }}    
    <div class="form-group">
            <label for="id">ID</label>
            <input type="number"  class="form-control" id="id" name="id" disabled value="{{$coupon+1}}"  required>
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ old('code') }}" required>
        </div>
        <div class="form-group">
            <label for="id">Type</label>
            <select name="type" id="type">
                                        <option value="percent_off">percent_off</option>
                                        <option value="fixed">fixed</option>
                                    </select>
        </div>
        <div class="form-group">
            <label for="values">Value</label>
            <input type="number" min="0" class="form-control" id="values" name="values" value="{{ old('values') }}" MIN="1" required>
        </div>

        <div class="form-group">
            <label for="exp_date">ExpDate</label>
            <input type="date" class="form-control" id="exp_date" name="exp_date" value="{{ old('exp_date') }}" required>
        </div>

        <div class="spacer"></div>


        <button type="submit" id="complete-discount" class="button-primary full-width">Apply</button>
    </form>
    <div><a class="back-button" href="javascript:history.back()"><img id="back-button" src="/img/keyboard-left-arrow-button.svg" alt=""></a>
            <a class="home-button" href="/"><img id="home-button" src="/img/home.svg" alt=""></a></div>
</div>
@endsection