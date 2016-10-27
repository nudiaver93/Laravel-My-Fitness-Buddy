<form action='/users/{{ $user->id }}' method='post'>

	{{ csrf_field() }}

	{{ method_field('PUT') }}

Name: <input type='text' name='name' value='{{ $user->name }}' />

Email: <input type='email' name='email' value='{{ $user->email }}' />

<input type='submit' value='Update'>

</form>