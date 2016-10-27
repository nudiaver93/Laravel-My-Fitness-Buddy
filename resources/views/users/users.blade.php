<ul class='list-group'>
@foreach($users as $user) 
<a href='/users/{{ $user->id }}'>
<li class='list-group-item'>
	{{ $user->name }}
</li>
</a>
@endforeach
</ul>