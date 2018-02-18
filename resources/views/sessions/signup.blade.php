@extends('layouts.base') @section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="my-4">Sign Up</h2>
    </div>
    <div class="col-lg-6">
        <form method="POST" action="">
        {{ csrf_field() }}
            <div class="form-group {{ $errors->has('username')?'has-error':'' }}">
                <label for="firstname">First Name</label>
                <input value="{{ old('firstname') }}" type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter First Name" required>
                @if ($errors->has('firstname'))
            <div class="text text-danger">{{ $errors->first('firstname') }}</div>
            @endif
            </div>
            <div class="form-group {{ $errors->has('lastname')?'has-error':'' }}">
                <label for="lastname">Last Name</label>
                <input value="{{ old('lastname') }}" type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Last Name">
                @if ($errors->has('lastname'))
            <div class="text text-danger">{{ $errors->first('lastname') }}</div>
            @endif
            </div>
            <div class="form-group {{ $errors->has('phone')?'has-error':'' }}">
                <label for="lastname">Phone Number</label>
                <input value="{{ old('phone') }}" type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number" required>
                @if ($errors->has('phone'))
            <div class="text text-danger">{{ $errors->first('phone') }}</div>
            @endif
            </div>
            <div class="form-group {{ $errors->has('email')?'has-error':'' }}">
                <label for="email">Email address</label>
                <input value="{{ old('email') }}" type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                @if ($errors->has('email'))
            <div class="text text-danger">{{ $errors->first('email') }}</div>
            @endif
            </div>
            <div class="form-group {{ $errors->has('password')?'has-error':'' }}">
                <label for="password">Password</label>
                <input value="{{ old('password') }}" type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                @if ($errors->has('password'))
            <div class="text text-danger">{{ $errors->first('password') }}</div>
            @endif
            </div>
            <div class="form-group {{ $errors->has('password_confirmation')?'has-error':'' }}">
                <label for="password-confirmation">Confirm Password</label>
                <input value="{{ old('password_confirmation') }}" type="password" name="password_confirmation" class="form-control" id="password-confirmation" placeholder="Confirm Password" required>
                @if ($errors->has('password_confirmation'))
                    <div class="text text-danger">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection