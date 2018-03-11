@extends('layouts.base')

@section('content')
@include('account.picture')
<!-- Profile Information -->
@include('account.profile')

<!-- Education -->
@include('account.other')

@endsection
