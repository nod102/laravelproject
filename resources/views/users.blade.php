<h1>Users</h1>
@if(isset($result))
    <table>
        <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        </tr>
    @foreach($result as $res)
        <tr>
        <td>{{$res->id}}</td>
        <td>{{$res->name}}</td>
        <td>{{$res->email}}</td>
        <td><a href="/users/del/{{$res->id}}">delete</a></td>
        <td><a href="/users/edit/{{$res->id}}">edit</a></td>
        </tr>
    @endforeach
    </table>
@endif