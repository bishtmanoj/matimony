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
    </div>
</div>
@endsection @section('javascript')
<script src="{{ asset('assets/js/app/controller.filter.js') }}"></script>
@endsection