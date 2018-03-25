@extends('layouts.base') @section('content')
<div class="row">

    <div class="col-lg-12">
        <h3>Update Other Information</h3>
        <form method="POST" action="" class="form-middle">
            {{ csrf_field() }}
            <div class="col-md-4">
                <div class="form-group {{ $errors->has('employment')?'has-error':'' }}">
                    <label for="education">Employment</label>
                    <select name="employment" class="form-control" required>
                        <option value="">Select Employment</option>
                        @foreach($employments as $row)
                        <option value="{{ $row->id }}" {{ old( 'employment')??$user->meta_item('employment', 'id') == $row->id?'selected':'' }} >{{ $row->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('employment'))
                    <div class="text text-danger">{{ $errors->first('employment') }}</div>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('language')?'has-error':'' }}">
                    <label for="language">Language</label>
                    <select name="language" class="form-control" required>
                        <option value="">Select Language</option>
                        @foreach($languages as $row)
                        <option value="{{ $row->id }}" {{ old( 'language')??$user->meta_item('language', 'id') == $row->id?'selected':'' }} >{{ $row->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('language'))
                    <div class="text text-danger">{{ $errors->first('language') }}</div>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('profile_for')?'has-error':'' }}">
                    <label for="language">Profile For</label>
                    <select name="profile_for" class="form-control" required>
                        <option value="">Profile For</option>
                        @foreach($profile_for as $row)
                        <option value="{{ $row->id }}" {{ old( 'profile_for')??$user->meta_item('profile_for', 'id') == $row->id?'selected':'' }} >{{ $row->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('profile_for'))
                    <div class="text text-danger">{{ $errors->first('profile_for') }}</div>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('height')?'has-error':'' }}">
                    <label for="height">Height</label>
                    <select name="height" class="form-control" required>
                        <option value="">Height</option>
                        @foreach($userheights as $row)
                        <option value="{{ $row->id }}" {{ old( 'height')??$user->meta_item('height', 'id') == $row->id?'selected':'' }} >{{ $row->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('profile_for'))
                    <div class="text text-danger">{{ $errors->first('profile_for') }}</div>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('education')?'has-error':'' }}">
                    <label for="education">Education</label>
                    <select name="education" class="form-control" required>
                        <option value="">Select Education</option>
                        @foreach($education as $row)
                        <option value="{{ $row->id }}" {{ old( 'education')??$user->meta_item('education', 'id') == $row->id?'selected':'' }} >{{ $row->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('education'))
                    <div class="text text-danger">{{ $errors->first('education') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group {{ $errors->has('caste')?'has-error':'' }}">
                    <label for="caste">caste</label>
                    <select name="caste" class="form-control" required>
                        <option value="">Select caste</option>
                        @foreach($caste as $row)
                        <option value="{{ $row->id }}" {{ old( 'caste')??$user->meta_item('caste', 'id') == $row->id?'selected':'' }} >{{ $row->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('caste'))
                    <div class="text text-danger">{{ $errors->first('caste') }}</div>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('marital_status')?'has-error':'' }}">
                    <label for="marital_status">Marital Status</label>
                    <select name="marital_status" class="form-control" required>
                        <option value="">Select Marital Status</option>
                        @foreach($marital as $row)
                        <option value="{{ $row->id }}" {{ old( 'marital_status')??$user->meta_item('marital', 'id') == $row->id?'selected':'' }} >{{ $row->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('marital_status'))
                    <div class="text text-danger">{{ $errors->first('marital_status') }}</div>
                    @endif
                </div>


                <div class="form-group {{ $errors->has('religion')?'has-error':'' }}">
                    <label for="religion">religion</label>
                    <select name="religion" class="form-control" required>
                        <option value="">Select religion</option>
                        @foreach($religion as $row)
                        <option value="{{ $row->id }}" {{ old( 'religion')??$user->meta_item('religion', 'id') == $row->id?'selected':'' }} >{{ $row->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('religion'))
                    <div class="text text-danger">{{ $errors->first('religion') }}</div>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('manglik')?'has-error':'' }}">
                    <label for="manglik">manglik</label>
                    <select name="manglik" class="form-control" required>
                        <option value="">Select manglik</option>
                        @foreach($manglik as $row)
                        <option value="{{ $row->id }}" {{ old( 'manglik')??$user->meta_item('manglik', 'id') == $row->id?'selected':'' }} >{{ $row->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('manglik'))
                    <div class="text text-danger">{{ $errors->first('manglik') }}</div>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('address')?'has-error':'' }}">
                    <label for="address">Address</label>
                    <input name="address" class="form-control" value="{{ old( 'address')??$user->meta_item('address', 'street') }}" required> @if ($errors->has('address'))
                    <div class="text text-danger">{{ $errors->first('address') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group {{ $errors->has('city')?'has-error':'' }}">
                    <label for="city">City</label>
                    <input name="city" class="form-control" value="{{ old( 'city')??$user->meta_item('address', 'city') }}" required> @if ($errors->has('city'))
                    <div class="text text-danger">{{ $errors->first('city') }}</div>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('state')?'has-error':'' }}">
                    <label for="state">State</label>
                    <input name="state" class="form-control" value="{{ old( 'state')??$user->meta_item('address', 'state') }}" required> @if ($errors->has('state'))
                    <div class="text text-danger">{{ $errors->first('state') }}</div>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('zipcode')?'has-error':'' }}">
                    <label for="zipcode">Zipcode</label>
                    <input type="number" minlength="6" name="zipcode" value="{{ old( 'zipcode')??$user->meta_item('address', 'pincode') }}" class="form-control" required> @if ($errors->has('zipcode'))
                    <div class="text text-danger">{{ $errors->first('zipcode') }}</div>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('about_me')?'has-error':'' }}">
                    <label for="about_me">About Me</label>
                    <textarea rows="6" name="about_me" class="form-control" required>{{ old( 'about_me')??$user->meta_item('about_me',false) }}</textarea>
                     @if ($errors->has('about_me'))
                    <div class="text text-danger">{{ $errors->first('about_me') }}</div>
                    @endif
                </div>
            </div>
            
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection