@extends('layouts.base') @section('content')
<div class="row" ng-controller="PreferenceController">
    <div class="col-md-8 col-md-offset-2">
        @component('components.panel',[ 'class' => 'primary', 'title' => 'Partner Preferences' ])
        <h4>Basic Info <a class="pull-right btn" ng-click="edit($event)" href="{{ route('preference.edit','basic') }}" id="basic">Edit</a></h4>
        <table class="table table-hover">
            <tr>
                <th>Age</th>
                <td>@if(($ageFrom = $user->getPreference('age','from')) && ($ageTo = $user->getPreference('age','to')))
                
                {{ $ageFrom }} - {{ $ageTo }} Years
                @endif</td>
                <th>Mother Tongue</th>
                <td>{{ $user->getPreference('language')??'' }}</td>
            </tr>
            <tr>
                <th>Marital Status</th>
                <td>{{ $user->getPreference('maritalStatus')??'' }}</td>
                <th>Height</th>
                <td>{{$user->getPreference('height')??''}}</td>
            </tr>
            <tr>
                <th>Religion/Community</th>
                <td colspan="3">{{ $user->getPreference('religion')??''}}</td>
            </tr>
        </table>
        <h4>Location Details <a class="pull-right btn"  ng-click="edit($event)" href="{{ route('preference.edit','location') }}" id="location">Edit</a></h4>
        <table class="table table-hover">
            <tr>
                <th>Country living in</th>
                <td>{{ $user->getPreference('country','country')??''}}</td>
                <th>State living in</th>
                <td>{{ $user->getPreference('state','state')??'' }}</td>
            </tr>
            <tr>
                <th>City/District </th>
                <td>{{$user->getPreference('city','city')??''}}</td>
                <th></th>
                <td></td>
            </tr>
        </table>
        <h4>Education & Career <a class="pull-right btn" ng-click="edit($event)" href="{{ route('preference.edit','education-career') }}" id="education-career">Edit</a></h4>
        <table class="table table-hover">
            <tr>
                <th>Education</th>
                <td>{{ $user->getPreference('education')??'' }}</td>
                <th>Working</th>
                <td>{{ $user->getPreference('employment')??'' }}</td>
            </tr>
            <tr style="display:none;">
                <th>Professional Area</th>
                <td></td>
                <th>Anual Income</th>
                <td></td>
            </tr>
        </table>

        <h4>Other Information <a class="pull-right btn" ng-click="edit($event)" href="{{ route('preference.edit','other') }}" id="other">Edit</a></h4>
        <table class="table table-hover">
            <tr>
                <th>Profile Created By</th>
                <td>{{ $user->getPreference('profileBy')??'' }}</td>
            </tr>
        </table>
        @endcomponent
    </div>
    @include('components.modal-preference')
</div>

@endsection
@section('stylesheet')
<style type="text/css">
table td:empty:after{content:'---'}
</style>
@endsection
@section('javascript')
<script src="{{ asset('assets/js/app/controller.preference.js') }}"></script>
@endsection