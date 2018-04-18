@extends('layouts.base')

@section('content')
<div class="row">
<div class="col-md-12">
@component('components.panel',[ 'class' => 'primary', 'title' => 'Interests showed' ])
@if($interests->count())
<table class="table table-hover">
<tr>
<th> Name</th>
<th>Sent On</th>
</tr>
@foreach($interests as $interest)
<tr>
<td>{{ $interest->sentBy->fullName() }}</td>
<td>{{ $interest->created_at }}</td>
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