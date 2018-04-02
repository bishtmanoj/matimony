@extends('layouts.base') @section('content')

<div class="user-banner" style="background:url('{{ asset(" cdn/images/bg.jpg ") }}')">
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
                                @if($viewas) 
                                @if(UserHelper::hasInterest($user->id))
                                <h4>Already connected</h4>
                                @else
                                <h4 class="">Connect with {{ $user->gender == 'male'?'Him':'Her' }}? Express interest</h4>
                                @endif
                                <button class="btn btn-primary-outline btn-lg show-interest {{ UserHelper::hasInterest($user->id)?'interested':'' }}" >
                                    <i class="ion-ios-heart"></i> <span class="uid-{{ $user->id }}"></span></button>
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

            <div class="panel panel-default">
                <div class="panel-heading">Other Information

                </div>
                <div class="panel-body">

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
                </div>
            </div>
        </aside>
    </div>
    <!-- -----  ROW END   ---- -->
</div>

@if(!Auth::check())
@include('components.modal')
@endif
@include('components.upload-picture')
@section('stylesheet')
<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
@endsection
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
        $('.show-interest').on('click',function(){
            @if(!Auth::check())
            $('#login-box').modal();
            return false;
            @endif
            angular.element($('.interest-row')).scope().create('{{ route('interest.create') }}', $(this));
        })


        
    });
</script>
<script type="text/javascript">


$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'circle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});


$('#upload').on('change', function () { 
var reader = new FileReader();
    reader.onload = function (e) {
    $uploadCrop.croppie('bind', {
    url: e.target.result
    }).then(function(){
    console.log('jQuery bind complete');
    });
    }
    reader.readAsDataURL(this.files[0]);
});


$('.upload-result').on('click', function (ev) {
$uploadCrop.croppie('result', {
type: 'canvas',
size: 'viewport'
}).then(function (resp) {
$.ajax({
url: "{{ route('profile.upload') }}",
type: "POST",
data: {"image":resp},
success: function (data) {
html = '<img src="' + resp + '" />';
$("#upload-demo-i").html(html);
}
});
});
});


</script>
@endsection