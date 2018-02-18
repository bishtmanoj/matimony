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
<th>Caste</th>
<td>{{ $user->user_meta('caste','name',true)??'N/A' }}</td>
</tr>
<tr>
<th>Religion</th>
<td>{{ $user->user_meta('religion','name',true)??'N/A' }}</td>
</tr>
<tr>
<th>Marital Status</th>
<td>{{ $user->user_meta('marital_status','name',true)??'N/A' }}</td>
</tr>
<tr>
<th>Manglik</th>
<td>{{ $user->user_meta('manglik','name',true)??'N/A' }}</td>
</tr>
@endcomponent
@endcomponent
