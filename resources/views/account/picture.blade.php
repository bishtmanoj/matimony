@component('components.panel',['class' => 'primary'])
@slot('title', 'Personal Information') 
@slot('action')
<a href="{{ route('profile.edit','picture') }}" class="btn btn-default">Edit Picture</a>
@endslot
<div class="col-md-4">
<img class="img img-responsive" src="{{ asset('uploads/profiles/'.Auth::user()->profile_picture) }}"/>
</div>
@endcomponent
