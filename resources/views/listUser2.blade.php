<h1>Listing User</h1>
<p>Name user: {{$user->name}}</p>
<p>Email user: {{$user->email}}</p>
<p>{{date('d/m/y h:i', strtotime($user->created_at))}}</p>
