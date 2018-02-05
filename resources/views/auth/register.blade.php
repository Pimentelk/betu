@extends('layouts.admin')

@section('style')
<style>
    .btn {
        width: 100% !important;
        height: 40px !important;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>Sign Up</h2>                  
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('first') ? ' has-error' : '' }}">

                    <div class="col-md-12">
                        <input id="first" type="text" class="form-control" name="first" value="{{ old('first') }}" placeholder="Enter your first name" required autofocus>

                        @if ($errors->has('first'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first') }}</strong>
                            </span>
                        @endif 
                    </div>
                </div>

                <div class="form-group{{ $errors->has('last') ? ' has-error' : '' }}">

                    <div class="col-md-12">
                        <input id="last" type="text" class="form-control" name="last" value="{{ old('last') }}" placeholder="Enter your last name" required>

                        @if ($errors->has('last'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="phone" type="text" class="form-control" name="phone" placeholder="Enter your phone" value="{{ old('phone') }}" required>

                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <input id="check-terms" type="checkbox" class="" name="terms_conditons" required> I have read and agree with the <a href="{!! URL::to('terms') !!}">Terms &amp; Conditions</a>.
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <input id="check-policy" type="checkbox" class="" name="terms_conditons" required> I have read and agree with the <a href="{!! URL::to('policy') !!}">Privacy Policy</a>.
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary register">Register</button>
                    </div>
                </div>
            </form>  
        </div>
    </div>
</div>
@endsection
