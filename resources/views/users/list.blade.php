@extends('layouts.base') @section('content')
<div class="row" ng-controller="FilterController">
    <aside class="col-md-4 col-sm-4  Refine-Search">
        <h4 class="">Refine Search</h4>
        <form class="fiterForm">
            
            <div class="panel panel-default ng-clock" ng-repeat="(heading, filter) in filters">
                <div class="panel-heading">@{{ filter.title }}</div>
                <div class="panel-body filter-items" style="max-height:245px; overflow-y:scroll;">
                    <div class="checkbox" ng-repeat="item in filter.data">
                        <label>
                            <input type="checkbox" ng-model="formData.search[heading][item.id]" ng-change="toggleSelect(heading, item)" class="filter"
                                ng-value="item.id"> @{{ item.name }}
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </aside>
    <div class="col-md-8 prod-categories">
        <h4>Search Result</h4>
        <div class="list-box wow fadeIn" ng-repeat="user in users">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="user-thumbnail light-bg">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('cdn/images/prod-6.jpg') }}" alt=""> </a>
                        <div class="thumbnail-content hover-style1 list-items">
                            <a href="#product-preview" data-toggle="modal" class="btn btn-primary pull-left">
                                <i class="icon ion-ios-eye-outline"></i> Quick View </a>
                            <a href="#" class="btn btn-primary pull-right">
                                <i class="ion-checkmark-round"></i> Sortlist </a>
                        </div>
                    </div>
                    <!---- user-thumbnail -->
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="user-content">
                        <h3 class="user-name">
                            <a href="#">@{{ user.firstname+' '+user.lastname }}</a>
                            <span class="status">
                                <i class="ion-record"></i> Online few mins ago</span>
                        </h3>
                        <p class="location">
                            <i class="ion-ios-location"></i> Living in Pune, From
                            <strong>Himachal Pradesh, India </strong>
                        </p>


                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>25 yrs, 5' 3"</td>
                                    <td>@{{ user.meta.marital?user.meta.marital.name:'--' }}</td>
                                </tr>
                                <tr>
                                    <td>@{{ user.meta.caste?user.meta.caste.name:'--' }}</td>
                                    <td>From Himachal Pradesh, India</td>
                                </tr>
                                <tr>
                                    <td> Hindi</td>
                                    <td> Not working</td>
                                </tr>
                            </tbody>
                        </table>


                        <!---div class="product-description">
                                                                <p>Hello, am glad you are interested in my sister's profile.She has completed her Bachelors.She is a s...More</p>
                                                            </div-->

                        <div class="prod-btns">

                            <button class="btn btn-primary-outline">
                                <i class="ion-ios-heart"></i> Show Interest</button>
                            <button class="btn btn-primary">View Full Profile
                                <i class="ion-ios-arrow-thin-right"></i>
                            </button>

                        </div>

                    </div>
                </div>
                <!---- col-md-8 --->
            </div>
            <!---- row -->
        </div>
    </div>
    <div class="row" ng-if="hasMore">
    <div class="text-center col-md-offset-4">
    <a class="btn btn-sm btn-default" ng-click="filterUsers()" ng-disabled="overlay"><span ng-if="overlay"><i class="fa fa-spin fa-spinner" ></i> Loading</span> <span ng-if="!overlay">Load More</span></a>
    <br>
    </div>
    </div>
</div>
@endsection @section('javascript')
<script src="{{ asset('assets/js/app/controller.filter.js') }}"></script>
@endsection