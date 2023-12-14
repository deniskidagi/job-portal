<h1>List Of Users</h1>

@foreach($contacts as $user)
    <p>{{$user->name}}</p>
@endforeach