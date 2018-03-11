@component('components.panel',['class' => 'primary'])
@slot('title', 'Other Information') 
@slot('action')
<a href="{{ route('profile.edit','other') }}" class="btn btn-default">Edit</a>
@endslot
@component('components.table')
<tr>
<th>Education</th>
<td>{{ $user->meta_item('education')??'N/A' }}</td>
</tr>
<tr>
<th>Caste</th>
<td>{{ $user->meta_item('caste')??'N/A' }}</td>
</tr>
<tr>
<th>Religion</th>
<td>{{ $user->meta_item('religion')??'N/A' }}</td>
</tr>
<tr>
<th>Marital Status</th>
<td>{{ $user->meta_item('marital')??'N/A' }}</td>
</tr>
<tr>
<th>Manglik</th>
<td>{{ $user->meta_item('manglik')??'N/A' }}</td>
</tr>
@endcomponent
@endcomponent
