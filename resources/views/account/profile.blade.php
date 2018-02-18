@extends('layouts.base')

@section('content')
<!-- Profile Information -->

@component('components.panel',['class' => 'primary'])
@slot('title', 'Personal Information') 
@slot('action')
<a href="{{ route('profile.edit') }}" class="btn btn-default">Edit Profile</a>
@endslot
@component('components.table')
<tr>
<th>First Name</th>
<td>{{ $user->firstname }}</td>
</tr>
<th>Last Name</th> 
<td>{{ $user->lastname }}</td>
<tr>
<th>Email Address</th>
<td>{{ $user->email }}</td>
</tr>
<tr>
<th>Phone Number</th>
<td>{{ $user->phone??'Not available' }}</td>
</tr>
<tr>
<th>Member Since</th>
<td>{{ $user->created_at->toFormattedDateString() }}
</tr>
@endcomponent

@endcomponent
@endsection
