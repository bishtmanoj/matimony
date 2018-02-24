@extends('layouts.base') @section('content')
<div  class="filter-page">
    <aside class="col-md-4 col-sm-4  Refine-Search">

        <h4 class="">Refine Search</h4>
        <form class="fiterForm" method="GET" action="{{ url('listing')}}" enctype="text/plain">
            @foreach($filters as $filterName => $filter)
            <div class="panel panel-default">
                <div class="panel-heading">{{ $filter['title'] }}</div>
                <div class="panel-body filter-items" style="max-height:245px; overflow-y:scroll;">
                    @foreach($filter['data'] as $filterKey => $filterVal)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="filter" name="{{  $filterName}}[]" value="{{ $filterVal->id }}"> {{ $filterVal->name }}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Search</button>
</div>
        </form>
    </aside>

    <div class="col-md-8">
        <h4>Search Result</h4>
        @foreach($users as $user)
        <ul class="list-group">
            <li class="list-group-item">
                {{ $user->name() }}
                <span class="pull-right">{{ $user->created_at->diffForHumans() }}</span>
            </li>
        </ul>
        @endforeach
        <div class="clearfix"></div>
        {{ $users->render() }}
    </div>
</div>
@endsection @section('javascript')
<script type="text/javascript">
jQuery(function(){
    $('.filter').click(function(){ 
        $('.filterForm').attr('action,'').submit();
    });
});
</script>
@endsection