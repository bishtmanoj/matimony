@component('components.panel',['class' => 'primary'])
@slot('title', 'Other Information') 
@slot('action')
<a href="{{ route('profile.edit','other') }}" class="btn btn-default">Edit</a>
@endslot
@component('components.table')
<tr>
<th>Education</th>
<td>{{ $user->user_meta('education','name',true)??'N/A' }}</td>
</tr>
<tr>
<th>Education</th>
<td>{{ $user->user_meta('education','name',true)??'N/A' }}</td>
</tr>
<tr>
<th>Education</th>
<td>{{ $user->user_meta('education','name',true)??'N/A' }}</td>
</tr>
<tr>
<th>Education</th>
<td>{{ $user->user_meta('education','name',true)??'N/A' }}</td>
</tr>
<tr>
<th>Education</th>
<td>{{ $user->user_meta('education','name',true)??'N/A' }}</td>
</tr>
<tr>
<th>Education</th>
<td>{{ $user->user_meta('education','name',true)??'N/A' }}</td>
</tr>
@endcomponent
@endcomponent
