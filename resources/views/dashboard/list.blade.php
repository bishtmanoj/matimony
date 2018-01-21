@extends('layouts.base')

@section('content')
<div class="row">
<h3>Welcome, {{ auth()->user()->firstname }}</h3>
</div>
@endsection