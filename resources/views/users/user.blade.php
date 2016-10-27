<h2> {{ $user->name }} </h2>
<h3> {{ $user->email }} </h3>

<ul>
@foreach($snippets as $snippet)
<li>{{ $snippet->snippet }}</li>
@endforeach
</ul>
<a href='/users/{{ $user->id }}/edit'>
  <button class='btn btn-primary' type='submit'> Edit Name </button>
</a>