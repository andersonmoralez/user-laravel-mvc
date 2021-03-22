@foreach($users as $user)
<div>
    <p>#ID: {{$user->id}}</p>
    <p>Name: {{$user->name}}</p>
    <p>E-mail: {{$user->email}}</p>
    <form action="{{route('users.deleteUser', ['user' => $user->id])}}" method="post">
        @csrf
        @method('delete')
        <input type="hidden" name="user" value="{{$user->id}}" />
        <button type="submit" value="Remover">Remove</button>

    </form>
</div>
@endforeach

<style>
    div{width: 300px;background: aquamarine;padding: 10px;border-radius: 5px;margin-bottom:10px;}
    form{text-align: right;margin: 0;}
</style>
