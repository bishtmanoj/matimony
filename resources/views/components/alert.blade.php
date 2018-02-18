<div class="alert alert-{{ $class }}" role="alert">
<i class="fa fa-{{ $class }}"></i>
{{ $slot }}
@if(isset($anchorLink) && isset($anchorText))
<a href="{{ $anchorLink }}" class="alert-link">{{ $anchorText }}</a>
@endif
</div>