@extends('layouts.base') @section('content')
<div class="row">

    <div class="col-lg-6 col-lg-offset-3">
        <h3>Update Password</h3>
        <form method="POST" action="" name="passwordForm" class="form-middle" novalidate>
            {{ csrf_field() }}
            
            <div class="form-group {{ $errors->has('current_password')?'has-error':'' }}">
                <label for="lastname">Current password</label>
                <input value="{{ old('current_password') }}" type="password" ng-model="current_password" name="current_password" class="form-control" id="current_password" placeholder="Enter Current Password"
                    required> @if ($errors->has('current_password'))
                <div class="text text-danger">{{ $errors->first('current_password') }}</div>
                @endif
            </div>
            <div class="form-group {{ $errors->has('password')?'has-error':'' }}">
                <label for="lastname">Password</label>
                <input value="{{ old('password') }}" type="password" ng-model="password" name="password" class="form-control" id="current_password" placeholder="Enter Password"
                    required> @if ($errors->has('password'))
                <div class="text text-danger">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="form-group {{ $errors->has('password_confirmation')?'has-error':'' }}">
                <label for="lastname">Confirm Password</label>
                <input value="{{ old('password_confirmation') }}" type="password" ng-model="password_confirmation" name="password_confirmation" class="form-control" id="current_password_confirmation" placeholder="Enter Password Confirmation"
                    required> @if ($errors->has('password_confirmation'))
                <div class="text text-danger">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary" >Update Password</button>
        </form>
    </div>
</div>
@endsection