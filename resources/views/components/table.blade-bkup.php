@php $tab = $tab??'vertical' @endphp
<table class="table">

@if($tab == 'horizontal')

<tr>
@foreach(explode('|',$headings) as $heading)
@php 
list($key, $heading) = explode(':',$column);
@endphp
<th>{{ $heading }}</th>
@endforeach
</tr>
<tr>
{!! $content !!}
</tr>
@else 
@foreach(explode('|',$headings) as $column)
@php 
list($key, $heading) = explode(':',$column);
@endphp
<tr>
<th>{{ $heading }}</th>
@if(is_array($data))
@foreach($data as $content)
<td>{!! $content->{$key} !!}</td>
@endforeach
@else
<td>{!! $data->{$key} !!}</td>
@endif
</tr>
@endforeach
<tr> 
</tr>
@endif
</table>