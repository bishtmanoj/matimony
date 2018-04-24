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
{{ $interest->sentBy->fullName() }} 
@else 
{{ $interest->sentTo->fullName() }}
@endif
</td>
<td>{{ ucfirst($interest->status) }}</td>
<td>{{ $interest->created_at->diffForHumans() }}</td>
@if($type == 'received')
<td><a class="btn btn-primary" href="{{ route('interest.action',[$interest->id, 'accept']) }}">Accept</a>&nbsp;&nbsp;
<a class="btn btn-default" href="{{ route('interest.action',[$interest->id, 'decline']) }}">Decline</a>
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