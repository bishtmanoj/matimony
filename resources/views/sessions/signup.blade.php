@extends('layouts.base') @section('content')
<div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="my-4">Sign Up</h2>
    </div>
    <div class="col-lg-12">
        <form method="POST" class="form-middle form-login" action="">
            {{ csrf_field() }}
            <div class="col-lg-6">
            <div class="form-group {{ $errors->has('username')?'has-error':'' }}">
                <label for="firstname">First Name</label>
                <input value="{{ old('firstname') }}" type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter First Name"
                    required> @if ($errors->has('firstname'))
                <div class="text text-danger">{{ $errors->first('firstname') }}</div>
                @endif
            </div>
            <div class="form-group {{ $errors->has('lastname')?'has-error':'' }}">
                <label for="lastname">Last Name</label>
                <input value="{{ old('lastname') }}" type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Last Name"> @if ($errors->has('lastname'))
                <div class="text text-danger">{{ $errors->first('lastname') }}</div>
                @endif
            </div>
            <div class="form-group {{ $errors->has('date_of_birth')?'has-error':'' }}">
                <label for="date_of_birth">Date Of Birth</label>
                <input value="{{ old('date_of_birth') }}" type="date" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="Enter Last Name"> @if ($errors->has('date_of_birth'))
                <div class="text text-danger">{{ $errors->first('date_of_birth') }}</div>
                @endif
            </div>
            <div class="form-group {{ $errors->has('gender')?'has-error':'' }}">

                <div class="row register-gender">
                    <label class="col-xs-12">Gender </label>
                    <div class="radio fancy_radio">
                        <label>
                            <input name="gender" type="radio" value="male" {{ old( 'gender')=='male' ? 'checked': '' }}>
                            <span>Male</span>
                        </label>
                    </div>

                    <div class="radio fancy_radio">
                        <label>
                            <input name="gender" type="radio" value="female" {{ old( 'gender')=='female' ? 'checked': '' }}>
                            <span>Female</span>
                        </label>
                    </div>
                    @if ($errors->has('gender'))
                    <div class="text text-danger col-xs-12">{{ $errors->first('gender') }}</div>
                    @endif
                </div>

            </div>

            <div class="form-group {{ $errors->has('profile_post_for')?'has-error':'' }}">
                <label for="lastname">Profile For</label>
                <select name="profile_post_for" class="form-control" required>
                    <option value="">Profile for</option>
                    @foreach($profile_posts as $profile_post)
                    <option value="{{ $profile_post->id }}">{{ $profile_post->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('profile_post_for'))
                <div class="text text-danger">{{ $errors->first('profile_post_for') }}</div>
                @endif
            </div>
</div>
<div class="col-lg-6">
            <div class="form-group {{ $errors->has('phone')?'has-error':'' }}">
                <label for="lastname">Phone Number</label>
                <input value="{{ old('phone') }}" type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number"
                    required> @if ($errors->has('phone'))
                <div class="text text-danger">{{ $errors->first('phone') }}</div>
                @endif
            </div>
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
            </div>
            <div class="form-group {{ $errors->has('password_confirmation')?'has-error':'' }}">
                <label for="password-confirmation">Confirm Password</label>
                <input value="{{ old('password_confirmation') }}" type="password" name="password_confirmation" class="form-control" id="password-confirmation"
                    placeholder="Confirm Password" required> @if ($errors->has('password_confirmation'))
                <div class="text text-danger">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>
</div>
<div class="clearfix"></div>
<div class="col-lg-12 text-center">
            <button type="submit" class="btn btn-primary">Sign Up</button>
</div>
        </form>
    </div>
</div>
@endsection