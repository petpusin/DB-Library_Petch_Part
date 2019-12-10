@extends('create.master')

@section('title')
<title>Shopping | Admin SIgn-in</title>
@endsection



@section('content')
<div class="container">
<form method="POST" action="{{ route('admin.signin.submit') }}">
                @csrf
            <div class="sign-in-box">
                <div class="title-sign">
                    Sign in to website
                </div>
                <hr>
                <div><img class="resize-icon-sign" src="/img/man-user.svg" alt=""><input type="text" id="em_id"
                    class=" @error('em_id') is-invalid @enderror" name="em_id" value="{{ old('em_id') }}" required autocomplete="em_id" autofocus placeholder="  username here">
                        @error('EmployeeNumber')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                <div ><img class="resize-icon-sign" src="/img/lock.svg" alt=""><input type="password" id="password"  class="@error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="  password">
                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                <div><input class="chk-box" type="checkbox">remember</div>
                <div><button class="sign-button">Sign in</button></div>
            </div>
        </form>
</div>
@endsection
@section('script')
<script src="/js/indexscpt.js"></script>
@endsection