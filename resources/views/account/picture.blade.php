@component('components.panel',['class' => 'primary'])
@slot('title', 'Personal Information') 
@slot('action')
<a href="{{ route('profile.edit','picture') }}" class="btn btn-default">Edit Picture</a>
@endslot
<div class="col-md-4">
<img class="img img-responsive" src="https://grand-vet.ru/wp-content/uploads/2017/11/default-avatar-250x250.png"/>
</div>
@endcomponent
