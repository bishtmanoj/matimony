@extends('layouts.base') @section('content')
<div class="row">
   
    <div class="col-lg-6">
        <form method="POST" action="">
        {{ csrf_field() }}
            <div class="form-group {{ $errors->has('education')?'has-error':'' }}">
                <label for="education">Education</label>
                <select  name="education" class="form-control" required>
                <option value="">Select Education</option>
                @foreach($rows as $row)
                <option value="{{ $row->id }}" {{ old('education')??$meta_key == $row->id?'selected':'' }} >{{ $row->name }}</option>
                @endforeach
                </select>
                @if ($errors->has('education'))
            <div class="text text-danger">{{ $errors->first('education') }}</div>
            @endif
            </div>
            <div class="form-group {{ $errors->has('caste')?'has-error':'' }}">
                <label for="caste">Caste</label>
                <select  name="caste" class="form-control" required>
                <option value="">Select Caste</option>
                @foreach($rows as $row)
                <option value="{{ $row->id }}" {{ old('caste')??$meta_key == $row->id?'selected':'' }} >{{ $row->name }}</option>
                @endforeach
                </select>
                @if ($errors->has('caste'))
            <div class="text text-danger">{{ $errors->first('caste') }}</div>
            @endif
            </div>
            <div class="form-group {{ $errors->has('religion')?'has-error':'' }}">
                <label for="religion">Religion</label>
                <select  name="religion" class="form-control" required>
                <option value="">Select Religion</option>
                @foreach($rows as $row)
                <option value="{{ $row->id }}" {{ old('religion')??$meta_key == $row->id?'selected':'' }} >{{ $row->name }}</option>
                @endforeach
                </select>
                @if ($errors->has('religion'))
            <div class="text text-danger">{{ $errors->first('religion') }}</div>
            @endif
            </div>
            <div class="form-group {{ $errors->has('manglik')?'has-error':'' }}">
                <label for="manglik">Manglik</label>
                <select  name="manglik" class="form-control" required>
                <option value="">Select Manglik</option>
                @foreach($rows as $row)
                <option value="{{ $row->id }}" {{ old('manglik')??$meta_key == $row->id?'selected':'' }} >{{ $row->name }}</option>
                @endforeach
                </select>
                @if ($errors->has('manglik'))
            <div class="text text-danger">{{ $errors->first('manglik') }}</div>
            @endif
            </div>
            <div class="form-group {{ $errors->has('marital_status')?'has-error':'' }}">
                <label for="marital_status">Marital Status</label>
                <select  name="marital_status" class="form-control" required>
                <option value="">Select Marital Status</option>
                @foreach($rows as $row)
                <option value="{{ $row->id }}" {{ old('marital_status')??$meta_key == $row->id?'selected':'' }} >{{ $row->name }}</option>
                @endforeach
                </select>
                @if ($errors->has('marital_status'))
            <div class="text text-danger">{{ $errors->first('marital_status') }}</div>
            @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection