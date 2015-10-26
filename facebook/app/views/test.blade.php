@foreach($role->users as $user)
	{{ $user->name }}
	<br/>
@endforeach
<br/>
<div style="color: red" >
	{{ $user->role->name }}
</div>