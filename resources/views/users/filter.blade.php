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
    <div class="col-md-8 prod-categories interest-row" ng-controller="InterestsController">
        <h4>Search Result</h4>
        <div id="filter-listing" ng-bind-html="users"></div> 
        <div class="row" ng-if="hasMore">
            <div class="text-center col-md-offset-4">
                <a class="btn btn-sm btn-default" ng-click="filterUsers()" ng-disabled="overlay">
                    <span ng-if="overlay">
                        <i class="fa fa-spin fa-spinner"></i> Loading</span>
                    <span ng-if="!overlay">Load More</span>
                </a>
                <br>
            </div>
        </div>
    </div>


@if(!Auth::check())
@include('components.modal')
@endif

    @endsection @section('javascript')
    <script src="{{ asset('assets/js/app/controller.filter.js') }}"></script>
    <script src="{{ asset('assets/js/app/controller.interest.js') }}"></script>
    <script src="{{ asset('assets/js/app/controller.login.js') }}"></script>
    <script type="text/javascript">
    jQuery(function($){
        $('#filter-listing').delegate('.show-interest','click',function(){
         var uid = $(this).attr('class').split(' ').reverse()[0].split('-').reverse()[0];
         @if(!Auth::check())
            $('#login-box').modal();
            @endif
            angular.element($('.interest-row')).scope().create({uid:uid});
        })
    });
    </script>
    @endsection