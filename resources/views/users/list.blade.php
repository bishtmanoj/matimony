@foreach($users as $user)
<div class="list-box wow fadeIn">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="user-thumbnail light-bg">
                <a href="#">
                    <img class="img-responsive" src="{{ $user->profile_picture_url() }}" alt=""> </a>
            </div>
            <!---- user-thumbnail -->
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="user-content">
                <h3 class="user-name">
                    <a href="#">{{ $user->fullName() }}</a>
                    <span class="status">
                        <i class="ion-record"></i> {{ $user->updated_at }}</span>
                </h3>
                @if($user->meta && ($address = $user->meta->address))
                <p class="location">
                    <i class="ion-ios-location"></i> Living in {{ $address->city }}, From
                    <strong>{{ $address->state }} </strong>
                </p>
                @endif
                <table class="table">
                    <tbody>
                        <tr>
                            <td>{{ $user->age() }} yrs {{ isset($user->height->name)?", {$user->height->name}":'' }}</td>
                            @if($user->meta && ($marital = $user->meta->marital))
                            <td>{{ $marital->name }}</td>
                            @endif
                        </tr>
                        @if($user->meta && ($caste = $user->meta->caste))
                        <tr>
                            <td>{{ $caste->name }}</td>
                        </tr>
                        @endif
                        <tr>
                            @if($user->meta && ($language = $user->meta->language))
                            <td> {{ $language->name }}</td>
                            @endif 
                            @if($user->meta && ($employment = $user->meta->employment))
                            <td>{{ $employment->name }} </td>
                            @endif
                        </tr>
                    </tbody>
                </table>


                <!---div class="product-description">
                                                                <p>Hello, am glad you are interested in my sister's profile.She has completed her Bachelors.She is a s...More</p>
                                                            </div-->

                <div class="prod-btns list-user-action">
                    @if(UserHelper::hasInterest($user->id))
                    <a  class="btn btn-primary-outline disabled show-interest interested"
                    > 
                        <i class="ion-ios-heart"></i> <span></span>
                    </a>
                    @else
                    <a  class="btn btn-primary-outline show-interest "
                    > 
                        <i class="ion-ios-heart"></i> <span class="uid-{{ $user->id }}"></span>
                    </a>
                    @endif
                    <a class="btn btn-primary" href="{{ route('profile.viewas',$user->id) }}">View Full Profile
                        <i class="ion-ios-arrow-thin-right"></i>
                    </a>
                </div>

            </div>
        </div>
        <!---- col-md-8 --->
    </div>
    <!---- row -->
</div>
</div>
@endforeach
