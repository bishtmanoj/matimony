@extends('layouts.base') @section('content')
<div class="user-banner" style="background:url('{{ asset("cdn/images/bg.jpg") }}')">
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

<a class="btn btn-sm btn-default" href="{{ route('profile.edit','picture') }}">Edit</a>
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
                            <div class="prod-btns">

                                <h4 class="hide">Connect with her? Express interest</h4>

                                <a class="btn btn-primary btn-sm"  href="{{ route('profile.edit','profile') }}">
                                    <i class="fa fa-pencil"></i> Update Personal Information</a>
                                <a class="btn btn-default btn-sm" href="{{ route('profile.edit','other') }}">Update Other Information
                                    <i class="fa fa-pencil"></i>
</a>

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
<!-- -----  container  ---- -->
@endsection @section('javascript')
<script type="text/javascript">
    jQuery(function () {
        $('.has-parent-container').removeClass('container');
    })
</script>
@endsection