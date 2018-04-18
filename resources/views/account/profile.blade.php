@extends('layouts.base') @section('content')

<div class="user-banner" style="background:url('{{ asset("cdn/images/bg.jpg ") }}')">
    <div class="container">
        <div class="profile-box">

            <div class="row">

                <aside class="col-md-3 col-sm-4">

                    <div class="panel panel-default">

                        <div class="user-thumbnail light-bg">
                            <a href="javascript:;">
                                <img class="img-responsive" src="{{ $user->profile_picture_url()  }}" alt="">
                            </a>
                            <!--  <div class="thumbnail-content hover-style1 list-items">    
                                                               <a href="#product-preview" data-toggle="modal" class="btn btn-primary pull-left"> <i class="icon ion-ios-eye-outline"></i> Quick View </a>
                                                               <a href="#" class="btn btn-primary pull-right"> <i class="ion-checkmark-round"></i> Sortlist </a>
                                                            </div>  -->
                            @if(!$viewas)
                            <a class="btn btn-sm btn-default" data-target="#upload-box" data-toggle="modal">Edit</a>
                            @endif
                        </div>

                        <!---- user-thumbnail -->


                    </div>


                </aside>


                <div class="col-md-9 wow fadeIn">

                    <div class="">
                        <div class="user-content">
                            <h3 class="user-name">
                                <a href="#">{{ $user->fullName() }} </a>
                                <span class="status">
                                    <i class="ion-record"></i> {{ $user->updated_at }}</span>
                            </h3>
                            @if(($city = $user->meta_item('address', 'city')) && ($state = $user->meta_item('address', 'state')))
                            <p class="location">
                                <i class="ion-ios-location"></i> Living in {{ $city }}, From
                                <strong>{{ $state }} </strong>
                            </p>
                            @endif
                            <div class="clearfix"></div>
                            <br>
                            <div class="prod-btns interest-row" ng-controller="InterestsController">
                                @if($viewas) @if(UserHelper::hasInterest($user->id))
                                <h4>Already connected</h4>
                                @else
                                <h4 class="">Connect with {{ $user->gender == 'male'?'Him':'Her' }}? Express interest</h4>
                                @endif
                                <button class="btn btn-primary-outline btn-lg show-interest {{ UserHelper::hasInterest($user->id)?'interested':'' }}">
                                    <i class="ion-ios-heart"></i>
                                    <span class="uid-{{ $user->id }}"></span>
                                </button>
                                <button class="btn btn-success btn-lg">Send Message
                                    <i class="ion-ios-arrow-thin-right"></i>
                                </button>
                                @else
                                <a class="btn btn-primary btn-sm" href="{{ route('profile.edit','profile') }}">
                                    <i class="fa fa-pencil"></i> Update Personal Information</a>
                                <a class="btn btn-default btn-sm" href="{{ route('profile.edit','other') }}">Update Other Information
                                    <i class="fa fa-pencil"></i>
                                </a>
                                @endif
                            </div>


                            <div class="clearfix"></div>
                            <br>

                        </div>
                    </div>
                    <!---- col-md-8 --->
                </div>
                <!---- list-box -->

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <aside class="col-md-12 col-sm-12">
            @component('components.panel',[ 'class' => 'primary', 'title' => 'Other Information' ])


            <table class="table">
                <tr>
                    <td>{{ $user->age() }} yrs {{ $user->meta_item('height') ??'' }}</td>
                    <td>{{ $user->meta_item('marital') ??'' }}</td>
                </tr>
                <tr>
                    <td>{{ $user->meta_item('caste') ??''}}, {{ $user->meta_item('religion') ??''}}</td>
                    <td>@if(($city = $user->meta_item('address', 'city')) && ($state = $user->meta_item('address', 'state')))
                        From {{ $city }}, {{ $state }} @endif
                    </td>
                </tr>
                <tr>
                    <td> {{ $user->meta_item('language') ??'' }}</td>
                    <td> {{ $user->meta_item('employment') ??'' }}</td>
                </tr>
            </table>


            <h4>ABOUT ME</h4>

            <p>{{ $user->meta_item('about_me', false) }}</p>


            <div class="clearfix"></div>
            @endcomponent
        </aside>
    </div>
    <!-- -----  ROW END   ---- -->
    <div class="row">
        <div class="col-md-12">
            @component('components.panel',[ 'class' => 'primary', 'title' => 'Partner Preferences' ])
            <table class="table table-hover">
                <tr>
                    <th>Age</th>
                    <td>@if(($ageFrom = $user->getPreference('age','from')) && ($ageTo = $user->getPreference('age','to'))) {{
                        $ageFrom }} - {{ $ageTo }} Years @endif
                    </td>
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
            <h4>Location Details </h4>
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
            <h4>Education & Career </h4>
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

            <h4>Other Information</h4>
            <table class="table table-hover">
                <tr>
                    <th>Profile Created By</th>
                    <td>{{ $user->getPreference('profileBy')??'' }}</td>
                </tr>
            </table>
            @endcomponent
        </div>
    </div>
</div>

@if(!Auth::check()) @include('components.modal') @endif @include('components.upload-picture') @section('stylesheet')
<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css"> @endsection
<!-- -----  container  ---- -->
@endsection @section('javascript')
<script src="{{ asset('assets/js/app/controller.interest.js') }}"></script>
<script src="{{ asset('assets/js/app/controller.upload.js') }}"></script>
@if(!Auth::check())

<script src="{{ asset('assets/js/app/controller.login.js') }}"></script>
@endif
<script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
<script type="text/javascript">
    jQuery(function () {
        $('.has-parent-container').removeClass('container');
        $('.show-interest').on('click', function () {
            @if(!Auth::check())
            $('#login-box').modal();
            return false;
            @endif
            angular.element($('.interest-row')).scope().create('{{ route('interest.create') }}', $(this));       })
    });
</script>
@endsection