@component('components.panel',['class' => 'primary'])
@slot('title', 'Cate') 
@slot('action')
<a href="{{ route('profile.edit','education') }}" class="btn btn-default">Edit</a>
@endslot
@component('components.table')
<tr>
<th>Education</th>
<td>{{ $user->user_meta('education','name',true)??'N/A' }}</td>
</tr>
@endcomponent
@endcomponent
