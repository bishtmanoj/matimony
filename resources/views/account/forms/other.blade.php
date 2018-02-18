@extends('layouts.base') @section('content')
<div class="row">
   
    <div class="col-lg-6">
        <form method="POST" action="">
        {{ csrf_field() }}
            @foreach($rows as $usermeta)
           
            <div class="form-group {{ $errors->has($usermeta['key'])?'has-error':'' }}">
                <label for="education">{{ $usermeta['title'] }}</label>
                <select  name="{{ $usermeta['key'] }}" class="form-control" required>
                <option value="">{{ $usermeta['title'] }}</option>
                @foreach($usermeta['content'] as $row)
                <option value="{{ $row->id }}" {{ old($usermeta['key'])??$user->user_meta($usermeta['key'], 'meta_id') == $row->id?'selected':'' }} >{{ $row->name }}</option>
                @endforeach
                </select>
                @if ($errors->has($usermeta['key']))
            <div class="text text-danger">{{ $errors->first($usermeta['key']) }}</div>
            @endif
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection