@extends('layouts.base') @section('content')
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="my-4">Sign In</h2>
  </div>
  <div class="col-lg-6 col-lg-offset-3">
    <form method="POST" action="" class="form-middle">
      {{ csrf_field() }}
      <div class="form-group {{ $errors->has('email')?'has-error':'' }}">
        <label for="email">Email address</label>
        <input value="{{ old('email') }}" type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
          placeholder="Enter email" required> @if ($errors->has('email'))
        <div class="text text-danger">{{ $errors->first('email') }}</div>
        @endif
      </div>
      <div class="form-group {{ $errors->has('password')?'has-error':'' }}">
        <label for="password">Password</label>
        <input value="{{ old('password') }}" type="password" name="password" class="form-control" id="password" placeholder="Password"
          required> @if ($errors->has('password'))
        <div class="text text-danger">{{ $errors->first('password') }}</div>
        @endif
      </div>{{ old('remember') }}
      <div class="form-check">
        <input type="checkbox" name="remember" value="1" class="form-check-input" {{ old( 'remember')? "checked='checked'": '' }}
          id="remember">
        <label class="form-check-label" for="remember">Remember me</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection