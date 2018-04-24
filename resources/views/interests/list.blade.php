@extends('layouts.base')

@section('content')
<div class="row">
<div class="col-md-12">
@component('components.panel',[ 'class' => 'primary', 'title' => $type == 'received'?'Interests Received':'Interests Sent' ])
@if($interests->count())
<table class="table table-hover">
<tr>
<th> Name</th>
<th>Status</th>
<th>{{ ($type == 'received')?'Received':'Sent' }} On</th>
@if($type == 'received')
<th>Action</th>
@endif
</tr>
@foreach($interests as $interest)
<tr>
<td>
@if($type == 'sent')
{{ $interest->sentTo->fullName() }} 
@else 
{{ $interest->sentBy->fullName() }}
@endif
</td>
<td>{{ ucfirst($interest->status) }}</td>
<td>{{ $interest->created_at->diffForHumans() }}</td>
@if($type == 'received')

<td>
@if($interest->status == 'pending')
<a class="btn btn-primary" href="{{ route('interest.action',[$interest->id, 'accept']) }}">Accept</a>&nbsp;&nbsp;
<a class="btn btn-default" href="{{ route('interest.action',[$interest->id, 'decline']) }}">Decline</a>
@else 
<a class="btn btn-info disabled">{{ ucfirst($interest->status) }}</a>&nbsp;&nbsp;
<a href="{{ route('profile.viewas',$interest->user_id) }}" class="btn btn-default">View Profile</a>
@endif
</td>
@endif
</tr>
@endforeach
</table>
<div class="text-right">
{{ $interests->render() }} 
</div>
@else 
<div class="alert alert-warning">No record found</div>
@endif 
@endcomponent
</div>
</div>
@endsection