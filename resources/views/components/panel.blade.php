<div class="panel panel-{{ $class }}">
  <!-- Default panel contents -->
  <div class="panel-heading"> {{ $title }}
  <div class="pull-right">
  {{ $action??'' }}
  </div>
  </div>
  <div class="panel-body">
    {{ $slot }}
  </div>
</div>